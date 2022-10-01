<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_mains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('content_desktop');
            $table->string('content_mobile');
            $table->string('caption_status');
            $table->string('content_caption')->default('lOREM IPSUM');
            $table->enum('btn_status', ['yes', 'not'])->default('not');
            $table->string('btn_text')->default('lOREM IPSUM');
            $table->string('btn_url')->default('LOREM IPSUM');
            $table->enum('status', ['yes', 'not'])->default('not');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slide_mains');
    }
};
