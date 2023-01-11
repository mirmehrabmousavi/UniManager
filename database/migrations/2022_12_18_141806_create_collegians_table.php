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
            $table->string('document_status');//0 => complete || 1 => not complete
            $table->string('document_name');//نام مدرک
            $table->string('document_file');//فایل
            $table->string('query_status');//وضعیت استعلام
            $table->foreignId('university_id')->constrained()->onDelete('cascade');
            $table->foreignId('major_id')->constrained()->onDelete('cascade');
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->foreignId('terms_id')->constrained()->onDelete('cascade');
            $table->date('entrance');
            $table->date('output');
            $table->date('status');
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
