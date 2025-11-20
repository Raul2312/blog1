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
    schema::create('posts',function(Blueprint $table){
        $table->id();
        $table->string('title');
        $table->string('description');
        $table->string('img',100);
        $table->string('content');
        $table->integer('likes');
        $table->String('slug');

        $table->foreignId('user_id')->constrained('users');
        $table->foreignId('categorias_id')->constrained('categorias');
        
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExits('posts');
    }
};
