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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('orders_name_ar');
            $table->string('orders_name_en')->nullable();
            $table->string('orders_name_hr')->nullable();
            $table->string('orders_details_ar', 600)->nullable();
            $table->string('orders_details_en', 600)->nullable();
            $table->string('orders_details_hr', 600)->nullable();
            $table->string('orders_price');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
