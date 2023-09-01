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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('designation_produit')->unique();
            $table->text('description_produit')->unique();
            $table->decimal('prix', 10, 2);
            $table->string('image')->nullable();
            $table->boolean('disponible')->default(1);
            $table->unsignedBigInteger('categorie_id');
            $table->timestamps();

            $table->foreign('categorie_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
