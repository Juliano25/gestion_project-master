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
        Schema::create('bilan_total_ventes', function (Blueprint $table) {
            $table->id();
            $table->integer('total_vente')->default(0);
            $table->decimal('total_prix', 10, 2);
            $table->date('date_bilan_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bilan_total_ventes');
    }
};
