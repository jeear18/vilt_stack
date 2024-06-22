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
        Schema::create('sample_models', function (Blueprint $table) {
            $table -> tinyText('name');
            $table -> tinyText('address');
            $table -> tinyText('purok');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('sample_models',
        ['name', 'address', 'purok'
           
        ]);
    }
};
