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
        Schema::create('nq_quran', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('surah')->default(0);
            $table->integer('ayat')->default(0);
            $table->text('ayat_sa');
            $table->text('ayat_lt')->nullable();
            $table->text('ayat_id');
            $table->text('tafsir_id')->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->dateTime('update_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nq_quran');
    }
};
