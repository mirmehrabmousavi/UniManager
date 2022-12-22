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
        Schema::create('collegians', function (Blueprint $table) {
            $table->id();
            $table->integer('idd');//collegians id
            $table->string('name');
            $table->string('static_numbers');
            $table->text('numbers');
            $table->text('known_numbers');
            $table->tinyInteger('document_status');//0 => complete || 1 => not complete
            $table->text('document_list');//name || file || status estellam
            $table->string('university');
            $table->string('major');
            $table->string('section');
            $table->string('terms');
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
        Schema::dropIfExists('collagians');
    }
};
