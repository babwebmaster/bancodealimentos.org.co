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
        Schema::create('cifras', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('value');
            $table->string('icon');
            $table->enum('published', ['yes', 'not'])->default('not');
            $table->string('category')->default('inicio');
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
        Schema::dropIfExists('cifras');
    }
};
