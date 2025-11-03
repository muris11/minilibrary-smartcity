<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('partials', function (Blueprint $table) {
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('content');
            $table->boolean('active')->default(true);
        });
    }

    public function down(): void
    {
        Schema::table('partials', function (Blueprint $table) {
            $table->dropColumn(['name', 'slug', 'content', 'active']);
        });
    }
};
