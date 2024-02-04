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
        Schema::create('detail_commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite')->default(0);
            $table->decimal('prix', 10, 2);
            $table->unsignedBigInteger('id_com');
            $table->foreign('id_com')->references('id_com')->on('commandes')->onDelete('cascade');
            $table->unsignedBigInteger('id_prod');
            $table->foreign('id_prod')->references('id_prod')->on('produits')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_commandes');
    }
};
