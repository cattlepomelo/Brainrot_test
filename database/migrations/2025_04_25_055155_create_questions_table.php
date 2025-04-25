<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Veic migrāciju.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_text');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->integer('correct_answer'); // Pareizās atbildes laukums (1, 2, 3 vai 4)
            $table->timestamps();
        });
    }

    /**
     * Atgriež migrācijas izmaiņas.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
