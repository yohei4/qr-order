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
        Schema::create('m_term_taxonomy', function (Blueprint $table) {
            $table->comment('M_分類用語');
            $table->bigInteger('id', true)->comment('ID');
            $table->bigInteger('term_id')->nullable()->comment('用語ID');
            $table->integer('taxonomy_type')->nullable()->comment('タクソノミータイプ');
            $table->text('description')->nullable()->comment('説明');
            $table->bigInteger('parent_taxonomy_id')->nullable()->comment('親タクソノミーID');
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_term_taxonomy');
    }
};
