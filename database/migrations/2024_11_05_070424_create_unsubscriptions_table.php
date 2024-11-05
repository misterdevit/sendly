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
        Schema::create('unsubscriptions', function (Blueprint $table) {
            $table->uuid();
            $table->foreignUuid('subscriber_id')->constrained();
            $table->foreignUuid('trace_id')->constrained()->nullable();
            $table->string('reason')->nullable();
            $table->string('ip')->nullable();
            $table->text('user_agent');
            $table->text('agreement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unsubscriptions');
    }
};
