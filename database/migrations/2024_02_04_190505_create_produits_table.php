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
            $table->string("nom_prod");
            $table->string("description");
            $table->decimal('prix_prod', 10, 2);
            $table->integer('stock_dispo')->default(0);
            $table->unsignedBigInteger('id_util');
            $table->foreign('id_util')->references('id_util')->on('utilisateurs')->onDelete('cascade');
            $table->unsignedBigInteger('id_categ');
            $table->foreign('id_categ')->references('id_categ')->on('categories')->onDelete('cascade');
            $table->timestamps();
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
