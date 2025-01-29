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
        Schema::create('customer_contacts', function (Blueprint $table) {
            $table->string('CUSTOMER_ID', 20)->primary();
            $table->string('EMAIL', 100);
            $table->string('PHONE', 15);
            $table->foreign('CUSTOMER_ID')->references('CUSTOMER_ID')->on('customers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_contact');
    }
};
