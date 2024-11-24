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
        Schema::create('m_menus', function (Blueprint $table) {
            $table->comment('M_メニュー');
            $table->bigInteger('id', true)->comment('ID');
            $table->string('company_code', 20)->nullable()->comment('企業コード');
            $table->string('brand_code', 20)->nullable()->comment('ブランドコード');
            $table->string('store_code', 20)->nullable()->comment('店舗コード');
            $table->string('menu_name')->nullable()->comment('メニュー名');
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_menus');
    }
};
