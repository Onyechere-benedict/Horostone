<?php

use App\Models\StoneAffirmationSet;
use App\Models\StoneAssociationSet;
use App\Models\StoneCareCard;
use App\Models\StoneMiningSitesSet;
use App\Models\StonePropertySet;
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
        Schema::create('stones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
            $table->text('description');
            // $table->foreignIdFor(StonePropertySet::class);
            // $table->foreignIdFor(StoneAssociationSet::class);
            $table->text('metaphysical_properties')->nullable();
            $table->text('color_relations')->nullable();
            // $table->foreignIdFor(StoneMiningSitesSet::class);
            // $table->foreignIdFor(StoneCareCard::class);
            // $table->foreignIdFor(StoneAffirmationSet::class);
            $table->text('image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stones');
    }
};
