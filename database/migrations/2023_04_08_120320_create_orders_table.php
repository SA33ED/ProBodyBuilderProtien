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
            $table->string("name", 100);
            $table->string("phone", 20);
            $table->string("address", 500);
            $table->integer("quantity");
            $table->tinyInteger("status")->default(0);
            $table->string("message", 500);
            $table->foreignId('protien_id')->index();
            $table->foreign('protien_id')->references('id')->on('protiens')->onUpdate('CASCADE')->onDelete('CASCADE');
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
