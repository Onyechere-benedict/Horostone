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
        Schema::create('stone_affirmation_sets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Stone::class);
            $table->string('affirmation_1')->nullable();
            $table->string('affirmation_2')->nullable();
            $table->string('affirmation_3')->nullable();
            $table->string('affirmation_4')->nullable();
            $table->string('affirmation_5')->nullable();
            $table->string('affirmation_6')->nullable();
            $table->string('affirmation_7')->nullable();
            $table->string('affirmation_8')->nullable();
            $table->string('affirmation_9')->nullable();
            $table->string('affirmation_10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stone_affirmation_sets');
    }
};
