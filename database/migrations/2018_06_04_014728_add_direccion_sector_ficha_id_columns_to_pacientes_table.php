<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDireccionSectorFichaIdColumnsToPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->string('direccion')->after('apellidos')->nullable;
            $table->string('sector')->after('direccion')->nullable;
            $table->integer('ficha_id')->after('establecimiento_id')->nullable();
            $table->string('telefono')->after('direccion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->dropColumn('direccion');
            $table->dropColumn('sector');
            $table->dropColumn('ficha_id');
            $table->dropColumn('telefono');
        });
    }
}
