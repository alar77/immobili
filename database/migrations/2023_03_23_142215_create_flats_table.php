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
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            /** @noinspection UnknownColumnInspection */
            $table->string('shortName')->nullable(false)->unique('shortName');
            $table->string('comune')->nullable(false);
            $table->string('cap')->nullable(false);
            $table->string('indirizzo')->nullable(false);
            $table->string('sezione')->nullable();
            $table->unsignedInteger('foglio')->nullable();
            $table->unsignedInteger('particalla')->nullable();
            $table->unsignedInteger('subalterno')->nullable();
            $table->date('possesso')->nullable();
            $table->date('compromesso')->nullable();
            $table->date('rogito')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flats');
    }
};
