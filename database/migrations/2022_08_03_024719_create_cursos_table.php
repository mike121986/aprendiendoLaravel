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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('contiene le nombre del curso');
            $table->string('descripcion')->comment('contiene la descripcion del curso');
            $table->text('categoria')->comment('categoria de los curtsos');
            $table->integer('status')->comment('sabe si y afue apribado el curos para mandarlo a la web');
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
        Schema::dropIfExists('cursos');
    }
};
