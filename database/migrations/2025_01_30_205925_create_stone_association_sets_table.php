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
        Schema::create('stone_association_sets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Stone::class);
            $table->string('planet');
            $table->string('zodiac');
            $table->string('chakra');
            $table->string('birth_month');
            $table->string('element');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stone_association_sets');
    }
};
