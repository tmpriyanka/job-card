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
        Schema::create('users', function (Blueprint $table) {
//            $table->id();
//            $table->string('name');
//            $table->string('email')->unique();
//            $table->timestamp('email_verified_at')->nullable();
//            $table->string('password');

            $table->id();
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->integer('type');
            $table->string('type_name',255);
            $table->string('name',255);
            $table->string('username',255);
            $table->string('password',255);
            $table->string('email',255)->unique();
            $table->string('phone',20);
            $table->text('address');
            $table->tinyInteger('status')->default();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
