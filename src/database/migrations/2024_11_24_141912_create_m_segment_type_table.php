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
        Schema::create('m_segment_type', function (Blueprint $table) {
            $table->comment('M_区分種類');
            $table->string('code', 3)->primary()->comment('コード');
            $table->string('segment_type_name', 100)->nullable()->comment('区分種類名');
            $table->string('sort_order', 3)->nullable()->comment('並び順');
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_segment_type');
    }
};
