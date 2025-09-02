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
        schema::create('comentarios',function(Blueprint $table){
        $table->integer('user_id');
        $table->integer('post_id');
        $table->string('content');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         schema::dropIfExits('comentarios');
    }
};
