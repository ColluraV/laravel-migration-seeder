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

        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 32);
            $table->string('stezione_partenza');
            $table->string('stezione_arrivo');
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->integer('codice_treno');
            $table->integer('numero_carrozza');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
