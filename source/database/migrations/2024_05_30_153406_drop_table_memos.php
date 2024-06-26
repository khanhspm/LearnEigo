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
        Schema::dropIfExists('memos');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('memos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vocab_id')->constrained('vocabularies');
            $table->string('memo', 255)->nullable();
            $table->integer('status');
            $table->timestamps();
        });
    }
};
