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
        Schema::create('traces', function (Blueprint $table) {
            $table->uuid();
            $table->foreignUuid('campaign_id')->constrained();
            $table->foreignUuid('subscriber_id')->constrained();
            $table->string('is_sent')->default(false);
            $table->datetime('send_at')->nullable();
            $table->datetime('sent_at')->nullable();
            $table->string('is_opened')->default(false);
            $table->datetime('opened_at')->nullable();
            $table->string('is_clicked')->default(false);
            $table->datetime('clicked_at')->nullable();
            $table->string('is_unsubscribed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traces');
    }
};
