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
        Schema::create('meals', function (Blueprint $table) {
            /*
                Os tipos vão mudar, conforme o banco que estiver conectado.
                !MongoDB --> constrained()->onDelete();
            */
            $table->id();
            //!Chave estrangeira
            $table->foreignId('menu_id')->constrained()->onDelete('cascade');
            $table->string('name', 16);
            $table->string('description', 50)->nullable();
            $table->decimal('price', 4, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
