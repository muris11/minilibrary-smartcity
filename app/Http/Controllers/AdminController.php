<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Page;
use App\Models\Partial;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::count();
        $adminUsers = User::where('role', 'admin')->count();
        $regularUsers = User::where('role', 'user')->count();

        return view('admin.dashboard', compact('totalUsers', 'adminUsers', 'regularUsers'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function createUser()
    {
        return view('admin.create-user');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:user,admin',
        ]);

        User::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users')->with('success', 'User created successfully.');
    }

    public function editUser(User $user)
    {
        return view('admin.edit-user', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:255|unique:users,nim,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|in:user,admin',
        ]);

        $user->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    public function deleteUser(User $user)
    {
        // Prevent deleting the last admin
        if ($user->isAdmin() && User::where('role', 'admin')->count() <= 1) {
            return redirect()->route('admin.users')->with('error', 'Cannot delete the last admin user.');
        }

        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }

    // Page Management Methods
    public function pages()
    {
        $pages = Page::all();
        return view('admin.pages', compact('pages'));
    }

    public function editPage(Page $page)
    {
        return view('admin.edit-page', compact('page'));
    }

    public function updatePage(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_active' => 'boolean',
        ]);

        $page->update([
            'title' => $request->title,
            'content' => $request->content,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.pages')->with('success', 'Page updated successfully.');
    }

    // Public Page Display
    public function showPage($slug)
    {
        $page = Page::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('page', compact('page'));
    }

    // Partial Management Methods
    public function partials()
    {
        $partials = Partial::all();
        return view('admin.partials', compact('partials'));
    }

    public function editPartial(Partial $partial)
    {
        return view('admin.edit-partial', compact('partial'));
    }

    public function updatePartial(Request $request, Partial $partial)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'content' => 'required|string',
            'active' => 'boolean',
            'new_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'replace_image_*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $content = $request->content;

        // Handle image replacements
        if ($request->hasFile('replace_image_0') || $request->hasFile('replace_image_1') || $request->hasFile('replace_image_2') || $request->hasFile('replace_image_3') || $request->hasFile('replace_image_4')) {
            $existingImages = [];
            preg_match_all('/asset\([\'"]([^\'"]*\.(?:png|jpg|jpeg|gif|svg|webp))[\'"]\)/i', $partial->content, $matches);
            if (!empty($matches[1])) {
                $existingImages = $matches[1];
            }

            foreach ($existingImages as $index => $originalImage) {
                $replaceField = 'replace_image_' . $index;
                if ($request->hasFile($replaceField)) {
                    $newImage = $request->file($replaceField);
                    $newImageName = time() . '_' . $index . '_' . $partial->slug . '.' . $newImage->getClientOriginalExtension();
                    $newImage->move(public_path('images'), $newImageName);

                    // Replace the old image path with the new one in content
                    $oldAssetCall = 'asset(\'' . $originalImage . '\')';
                    $newAssetCall = 'asset(\'images/' . $newImageName . '\')';
                    $content = str_replace($oldAssetCall, $newAssetCall, $content);

                    // Also handle double quotes
                    $oldAssetCallDouble = 'asset("' . $originalImage . '")';
                    $newAssetCallDouble = 'asset("images/' . $newImageName . '")';
                    $content = str_replace($oldAssetCallDouble, $newAssetCallDouble, $content);
                }
            }
        }

        // Handle new images
        if ($request->hasFile('new_images')) {
            $uploadedImages = [];
            foreach ($request->file('new_images') as $index => $image) {
                $imageName = time() . '_new_' . $index . '_' . $partial->slug . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $uploadedImages[] = 'images/' . $imageName;
            }

            // You can add logic here to insert new images into the content if needed
            // For now, we'll just upload them and they can be manually referenced in the content
        }

        $partial->update([
            'name' => $request->name,
            'description' => $request->description,
            'content' => $content,
            'active' => $request->has('active'),
        ]);

        return redirect()->route('admin.partials')->with('success', 'Partial updated successfully.');
    }

    // Team Members Management Methods
    public function teamMembers()
    {
        $teamMembers = TeamMember::ordered()->get();
        return view('admin.team-members', compact('teamMembers'));
    }

    public function createTeamMember()
    {
        return view('admin.create-team-member');
    }

    public function storeTeamMember(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'skills' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_team_' . uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        // Process skills - split by comma and trim
        $skills = null;
        if ($request->skills) {
            $skills = array_map('trim', explode(',', $request->skills));
            $skills = array_filter($skills); // Remove empty values
        }

        TeamMember::create([
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->description,
            'skills' => $skills,
            'image' => $imagePath,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.team-members')->with('success', 'Team member created successfully.');
    }

    public function editTeamMember(TeamMember $teamMember)
    {
        return view('admin.edit-team-member', compact('teamMember'));
    }

    public function updateTeamMember(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'skills' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $imagePath = $teamMember->image;
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($teamMember->image && file_exists(public_path($teamMember->image))) {
                unlink(public_path($teamMember->image));
            }

            $imageName = time() . '_team_' . uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        // Process skills - split by comma and trim
        $skills = null;
        if ($request->skills) {
            $skills = array_map('trim', explode(',', $request->skills));
            $skills = array_filter($skills); // Remove empty values
        }

        $teamMember->update([
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->description,
            'skills' => $skills,
            'image' => $imagePath,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.team-members')->with('success', 'Team member updated successfully.');
    }

    public function deleteTeamMember(TeamMember $teamMember)
    {
        // Delete image file if exists
        if ($teamMember->image && file_exists(public_path($teamMember->image))) {
            unlink(public_path($teamMember->image));
        }

        $teamMember->delete();

        return redirect()->route('admin.team-members')->with('success', 'Team member deleted successfully.');
    }
}
