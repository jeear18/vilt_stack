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
        Schema::table('games', function (Blueprint $table) {
            $table -> tinyText('Mobile_Legend');
            $table -> tinyText('CoD');
            $table -> tinyText('Wildrift');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('games',
        ['Mobile_Legend', 'CoD', 'Wildrift'
        ]);
    }
};
