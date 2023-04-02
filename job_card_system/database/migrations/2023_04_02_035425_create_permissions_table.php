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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(\App\Models\User::class,'user_id');
            $table->foreignIdFor(\App\Models\Module::class,'module_id');

//            $table->integer('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('users');
//
//            $table->integer('module_id')->unsigned();
//            $table->foreign('module_id')->references('id')->on('modules');

            $table->tinyInteger('granted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
