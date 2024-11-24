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
        Schema::create('t_users', function (Blueprint $table) {
            $table->comment('T_ユーザー');
            $table->bigInteger('id', true)->comment('ID');
            $table->string('email')->nullable()->comment('メールアドレス');
            $table->string('password')->nullable()->comment('パスワード');
            $table->string('last_name', 100)->nullable()->comment('性');
            $table->string('first_name', 100)->nullable()->comment('名');
            $table->string('user_name', 100)->nullable()->comment('ユーザー名');
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
        Schema::dropIfExists('t_users');
    }
};
