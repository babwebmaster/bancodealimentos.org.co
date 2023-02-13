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
        Schema::create('cifras_category_cifras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cifras_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_cifras_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('cifras_category_cifras');
    }
};
