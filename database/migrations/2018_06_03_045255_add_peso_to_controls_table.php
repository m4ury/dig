<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPesoToControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('controls', function (Blueprint $table) {
            $table->decimal('peso')->after('paciente_id')->nullable;
            $table->decimal('talla')->after('peso')->nullable;
            $table->integer('imc')->after('talla')->nullable;
            $table->string('rcv')->after('talla')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('controls', function (Blueprint $table) {
            $table->dropColumn('peso');
            $table->dropColumn('talla');
            $table->dropColumn('imc');
            $table->dropColumn('rcv');
        });
    }
}
