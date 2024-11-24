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
        Schema::create('m_admins', function (Blueprint $table) {
            $table->comment('M_管理者');
            $table->bigInteger('id', true)->comment('ID');
            $table->string('email')->nullable()->comment('メールアドレス');
            $table->string('password')->nullable()->comment('パスワード');
            $table->string('last_name', 100)->nullable()->comment('性');
            $table->string('first_name', 100)->nullable()->comment('名');
            $table->date('birth_date')->nullable()->comment('生年月日');
            $table->string('tel', 15)->nullable()->comment('TEL');
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
        Schema::dropIfExists('m_admins');
    }
};
