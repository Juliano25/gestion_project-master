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
        Schema::create('bilan_ventes', function (Blueprint $table) {
            $table->id();
            $table->integer('total_vente_vendeur')->default(0);
            $table->decimal('total_prix_vendeur', 10, 2);
            $table->date('date_bilan');
            $table->unsignedBigInteger('id_vente');
            $table->foreign('id_vente')->references('id_vente')->on('ventes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bilan_ventes');
    }
};
