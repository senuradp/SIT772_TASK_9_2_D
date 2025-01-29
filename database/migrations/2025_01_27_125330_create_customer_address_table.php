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
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->string('CUSTOMER_ID', 20)->primary();
            $table->string('STREET', 100);
            $table->string('CITY', 50);
            $table->string('POSTAL_CODE', 10);
            $table->foreign('CUSTOMER_ID')->references('CUSTOMER_ID')->on('customers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_address');
    }
};
