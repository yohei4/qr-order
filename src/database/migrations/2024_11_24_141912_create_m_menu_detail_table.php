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
        Schema::create('m_menu_detail', function (Blueprint $table) {
            $table->comment('M_メニュー詳細');
            $table->bigInteger('id', true)->comment('ID');
            $table->bigInteger('menu_id')->comment('メニューID');
            $table->string('start_date', 20)->nullable()->comment('開始日');
            $table->string('end_date', 20)->nullable()->comment('終了日');
            $table->text('description')->nullable()->comment('説明');
            $table->text('remarks')->nullable()->comment('備考');
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_menu_detail');
    }
};
