<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ride_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ride_id')->constrained()->onDelete('cascade');
            $table->string('key');
            $table->decimal('value', 15, 6);
            $table->string('unit')->nullable();
            $table->unsignedTinyInteger('precision')->default(2);
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['ride_id', 'key']);

            $table->index(['ride_id', 'key', 'type']);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ride_stats');
    }
};
