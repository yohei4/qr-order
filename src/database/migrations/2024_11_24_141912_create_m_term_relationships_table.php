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
        Schema::create('m_term_relationships', function (Blueprint $table) {
            $table->comment('M_用語関連付け');
            $table->bigInteger('menu_id')->nullable()->comment('メニューID');
            $table->bigInteger('taxonomy_id')->nullable()->comment('タクソノミーID');
            $table->integer('sort_order')->nullable()->comment('並び順');
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_term_relationships');
    }
};
