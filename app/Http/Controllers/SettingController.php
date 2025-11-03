<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SettingController extends Controller
{
    public function index()
    {
        return view('setting');
    }

    public function deleteAccount(Request $request)
    {
        // Validate current password
        $request->validate([
            'current_password' => 'required|string',
        ]);

        /** @var User $user */
        $user = Auth::user();

        // Check if current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Delete the user
        $user->delete();

        // Log out and redirect
        Auth::logout();

        return redirect('/')->with('success', 'Your account has been successfully deleted.');
    }
}
