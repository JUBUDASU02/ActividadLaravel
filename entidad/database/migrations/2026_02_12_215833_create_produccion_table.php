<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->id();
            $table->string('brand'); // Marca de la moto
            $table->string('model'); // Modelo de la moto
            $table->integer('year'); // Año de fabricación
            $table->integer('cc'); // Cilindrada en cc
            $table->enum('fuel_type', ['Gasolina', 'Eléctrica', 'Híbrida']); // Tipo de combustible
            $table->decimal('price', 10, 2); // Precio (10 dígitos, 2 decimales)
            $table->integer('stock')->default(0); // Cantidad disponible
            $table->boolean('is_active')->default(true); // Estado del producto
            $table->text('description')->nullable(); // Descripción opcional
            $table->timestamps(); // created_at y updated_at
            $table->softDeletes(); // deleted_at (opcional)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motos');
    }
};
