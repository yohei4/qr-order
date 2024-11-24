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
        Schema::create('m_terms', function (Blueprint $table) {
            $table->comment('M_用語');
            $table->bigInteger('id', true)->comment('ID');
            $table->string('name')->nullable()->comment('名称');
            $table->string('slug')->nullable()->comment('スラッグ');
            $table->bigInteger('term_group_id')->nullable()->comment('用語グループID');
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_terms');
    }
};
