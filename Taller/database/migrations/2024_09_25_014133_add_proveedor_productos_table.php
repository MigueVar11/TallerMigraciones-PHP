<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //Añade columna proveedor despues de nombre
        Schema::table('productos', function (Blueprint $table) {
            $table->string('proveedor', 100)->after('nombre')->nullable();
        });
    }


    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn('proveedor'); //Se elimina la columna proveedor por si se quiere hacer un rollback
        });
    }
};
