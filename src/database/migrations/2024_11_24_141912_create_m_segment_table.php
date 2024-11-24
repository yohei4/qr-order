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
        Schema::create('m_segment', function (Blueprint $table) {
            $table->comment('M_区分');
            $table->integer('code')->comment('コード');
            $table->string('segment_type_code', 3)->comment('区分種類コード');
            $table->string('segment_name', 100)->nullable()->comment('区分名');
            $table->string('sort_order', 3)->nullable()->comment('並び順');
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');

            $table->primary(['code', 'segment_type_code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_segment');
    }
};
