<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->foreignId('ville_id');
            $table->boolean('type');
            $table->string('patente',100);
            $table->string('ice',100);
            $table->string('i_f',100);
            $table->string('autorisation',100);
            $table->string('rc',100);
            $table->longText('adress');

            $table->string('pharmacien',150);
            $table->string('contact',50);
            $table->string('cin',10);

            $table->string('fichier');
            $table->boolean('fichier_cin');
            $table->boolean('fichier_diplome');
            $table->boolean('fichier_autorisation');
            $table->boolean('fichier_rc_patente');
            $table->boolean('fichier_if_ice');

            $table->boolean('bloque');
            $table->longText('motif');
            $table->foreignId('user_id');
            $table->integer('updated_by');
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
        Schema::dropIfExists('clients');
    }
}
