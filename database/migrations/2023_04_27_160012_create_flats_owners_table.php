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
        Schema::create('flats_owners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id');
            $table->foreignId('flat_id');
            $table->enum('role',['Proprietario','Nudo Proprietario','Usufruttuario']);
            $table->timestamps();
        });
        Schema::table('flats_owners', function (Blueprint $table) {
            $table->foreign('owner_id')
                ->references('id')->on('owners')
                ->restrictOnUpdate()->cascadeOnDelete();
            $table->foreign('flat_id')
                ->references('id')->on('flats')
                ->restrictOnUpdate()->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flats_owners');
    }
};
