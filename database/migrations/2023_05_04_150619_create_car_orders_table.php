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
        Schema::create('car_orders', function (Blueprint $table) {
            $table->id();
            
            $table->string('full_name');
            $table->date('birth_date');
            $table->string('email');
            $table->string('phone');
            
            $table->enum(
                'country', 
                [
                    'Україна',
                    'США',
                    'Німеччина',
                    'Польща',
                    'Греція',
                    'Швейцарія',
                    'Австралія',
                    'Ліхтенштейн',
                    'Люксембург',
                    'Італія'
                ]
            );
            $table->string('city');
            $table->string('passport_adress');
            $table->string('real_adress');
            $table->boolean('is_real_is_passport')->default(false);
            
            $table->string('car_brand');
            $table->string('car_color');
            $table->integer('sum');
            $table->enum('currency', ['UAH', 'USD']);
            $table->boolean('is_life_insurance')->default(false);
            $table->boolean('is_car_insurance')->default(false);
            $table->boolean('is_preterm_payment')->default(false);
            $table->text('client_note');
            $table->string('person_photo');
            $table->date('purchase_date');           
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_orders');
    }
};
