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
        Schema::create('kunden' , function (Blueprint $table) {
            $table->id();
            $table->string('rfirma');
            $table->string('ranrede');
            $table->string('rvorname');
            $table->string('rname');
            $table->string('rstrasse');
            $table->string('rplz');
            $table->string('rort');
            $table->string('remail');
            $table->string('rtelefon');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunden');
    }
};
