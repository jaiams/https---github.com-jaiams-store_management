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
        Schema::create('store_storenames', function (Blueprint $table) {
            $table->id();
            $table->string('stores_name');
            $table->string('stores_address');
            $table->integer('stores_contact');
            $table->string('stores_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_storenames');
    }
};
