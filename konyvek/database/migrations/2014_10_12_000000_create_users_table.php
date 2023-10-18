<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            //auto-increment, els.kulcs, bigint tipusu
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        User::create([
            'name' => 'Mariann', 
            'email' => 'mariann@gmail.com', 
            'password' => 'mariann']);
        User::create([
            'name' => 'Bea', 
            'email' => 'bea@gmail.com', 
            'password' => 'bea']); 
        User::create([
            'name' => 'Gyöngyi', 
            'email' => 'gyongyi@gmail.com', 
            'password' => 'gyongyi']);  

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
