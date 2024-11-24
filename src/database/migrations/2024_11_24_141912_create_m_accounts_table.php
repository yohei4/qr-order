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
        Schema::create('m_accounts', function (Blueprint $table) {
            $table->comment('M_アカウント');
            $table->bigInteger('id', true)->comment('ID');
            $table->string('email')->nullable()->comment('メールアドレス');
            $table->string('password')->nullable()->comment('パスワード');
            $table->string('company_code', 20)->nullable()->comment('企業コード');
            $table->string('store_code', 20)->nullable()->comment('店舗コード');
            $table->string('parent_company_code', 20)->nullable()->comment('親企業コード');
            $table->string('parent_store_code', 20)->nullable()->comment('親店舗コード');
            $table->rememberToken()->comment('記憶トークン');
            $table->timestamp('email_verified_at')->nullable()->comment('メール認証日時');
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_accounts');
    }
};
