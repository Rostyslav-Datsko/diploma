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
        Schema::create('budget', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('budget_name');
            $table->date('creation_date');
            $table->decimal('salary');
            $table->decimal('additional_income');
            $table->decimal('investment_income');
            $table->decimal('social_benefits');
            $table->decimal('housing');
            $table->decimal('food');
            $table->decimal('transportation');
            $table->decimal('clothing_and_footwear');
            $table->decimal('medical_services');
            $table->decimal('entertainment');
            $table->decimal('utilities');
            $table->decimal('credits_loans');
            $table->decimal('education');
            $table->decimal('sports');
            $table->decimal('savings');
            $table->decimal('charitable_contributions');
            $table->decimal('income_amount');
            $table->decimal('expenses_amount');
            $table->decimal('balance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budget');
    }
};
