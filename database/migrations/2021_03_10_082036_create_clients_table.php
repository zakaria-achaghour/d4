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
            $table->string('patente',100)->nullable();
            $table->string('ice',100)->nullable();
            $table->string('i_f',100)->nullable();
            $table->string('autorisation',100)->nullable();
            $table->string('rc',100)->nullable();
            $table->longText('adress')->nullable();

            $table->string('pharmacien',150);
            $table->string('contact',50)->nullable();
            $table->string('cin',10)->nullable();

            $table->string('fichier')->nullable();
            $table->boolean('fichier_cin')->default(0);
            $table->boolean('fichier_diplome')->default(0);
            $table->boolean('fichier_autorisation')->default(0);
            $table->boolean('fichier_rc_patente')->default(0);
            $table->boolean('fichier_if_ice')->default(0);

            $table->boolean('bloque');
            $table->longText('motif')->nullable();
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
