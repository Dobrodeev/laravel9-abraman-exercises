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
        Schema::create('gifts', function (Blueprint $table) {
            $table->id();
            
            $table->string('full_name');
            $table->date('birth_date');
            $table->enum('person_sex', ['чоловіча', 'жіноча']);
            
            $table->boolean('is_will_greet')->default(false)->nullable();
            $table->boolean('is_go_to_cinema')->default(false)->nullable();
            $table->boolean('is_go_to_cafe')->default(false)->nullable();
            $table->boolean('is_go_to_coffeehouse')->default(false)->nullable();
            $table->boolean('is_go_to_pizzeria')->default(false)->nullable();
            $table->boolean('is_go_to_flat')->default(false)->nullable();
            $table->boolean('is_go_to_cottage')->default(false)->nullable();
            $table->boolean('is_go_at_picnic')->default(false)->nullable();
            $table->boolean('is_go_at_hunting')->default(false)->nullable();
            $table->boolean('is_go_at_fishcatch')->default(false)->nullable();
            
            $table->boolean('is_to_gift_gold')->default(false)->nullable();
            $table->boolean('is_to_gift_costume_jewellery')->default(false)->nullable();
            $table->boolean('is_to_gift_handbag')->default(false)->nullable();
            $table->boolean('is_to_gift_italian_handbag')->default(false)->nullable();
            $table->boolean('is_to_gift_boxing_gloves')->default(false)->nullable();
            
            $table->enum('budget', ['300_uah', '300_to_500_uah', '500_to_1000_uah', 'over_1000_uah']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gifts');
    }
};
