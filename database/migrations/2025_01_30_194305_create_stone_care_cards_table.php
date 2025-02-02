<?php

use App\Models\Stone;
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
        Schema::create('stone_care_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Stone::class);
            $table->string('cleansing');
            $table->string('is_sun_safe');
            $table->string('is_water_safe');
            $table->string('recharge_method');
            $table->string('setting_intention');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stone_care_cards');
    }
};
