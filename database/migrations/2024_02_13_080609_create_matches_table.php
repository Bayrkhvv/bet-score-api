<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(\App\Models\Matches::TABLE, function (Blueprint $table) {
            $table->id();
            $table->foreignId(\App\Models\Matches::LEAGUE_ID)
                ->constrained(\App\Models\League::TABLE);
            $table->string(\App\Models\Matches::TEAM1);
            $table->string(\App\Models\Matches::TEAM2);
            $table->json(\App\Models\Matches::SCORE);
            $table->json(\App\Models\Matches::JSON);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(\App\Models\Matches::TABLE);
    }
};
