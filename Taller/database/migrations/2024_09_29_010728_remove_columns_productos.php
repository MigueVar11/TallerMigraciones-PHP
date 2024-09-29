<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {  // Eliminar las columnas 'descripcion' y 'codigo'
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn(['descripcion', 'codigo']);
        });
    }

    public function down()
    {
        //Por si se quiere hacer un rollback
        Schema::table('productos', function (Blueprint $table) {
            $table->text('descripcion')->nullable(); // Volver a crear columna 'descripcion'
            $table->string('codigo', 50)->unique(); // Volver a crear columna 'codigo'
        });
    }

};
