<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // Llave primaria
            $table->string('nombre', 150); // Columna string
            $table->text('descripcion')->nullable(); // Columna text
            $table->integer('cantidad')->unsigned(); // Columna integer
            $table->decimal('precio', 8, 2); // Columna decimal
            $table->boolean('disponible')->default(true); // Columna boolean
            $table->date('fecha_ingreso'); // Columna para la fecha
            $table->string('codigo', 50)->unique(); //con modificador unique
            $table->enum('categoria', ['Electrónica', 'Hogar', 'Ropa', 'Alimentos','Herrramientas']);
            $table->timestamps();
        });

/*  nullable(): Permite que la columna acepte valores nulos.
    unsigned(): Indica que la columna de tipo entero solo puede almacenar valores positivos.
    default(): Establece un valor predeterminado para la columna si no se proporciona uno.
    unique(): Asegura que los valores en la columna sean únicos en toda la tabla.
    timestamps(): Crea automáticamente las columnas created_at y updated_at para registrar cuándo se crean o actualizan las filas.
    */
    }
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
