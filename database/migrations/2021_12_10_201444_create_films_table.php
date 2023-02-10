<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_en');
            $table->string('title_original');
            $table->integer('production_company_id');
            $table->integer('production_country_id');
            $table->year('year_of_production');
            // $table->integer('film_category_id');
            // $table->integer('film_length_id');
            // $table->integer('film_format_id');
            $table->integer('duration');
            $table->enum('color', ['color', 'no-color', 'mixed']);
            $table->text('synopsis');
            $table->text('synopsis_en');
            $table->text('cover_photo')->nullable();
            $table->text('trailer')->nullable();
            $table->timestamps();

            $table->foreignId('film_category_id')->constrained();
            $table->foreignId('film_length_id')->constrained();
            $table->foreignId('film_format_id')->constrained();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
