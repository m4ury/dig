<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJefeFamiliaAndParentescoToPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
          $table->boolean('jefe_familia')->after('fecha_nacimiento')->default(false)->nullable();
          $table->string('parentesco')->after('jefe_familia')->nullable();
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
            $table->dropColumn('jefe_familia');
            $table->dropColumn('parentesco');
        });
    }
}
