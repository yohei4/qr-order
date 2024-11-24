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
        Schema::create('t_password_reset_tokens_admin', function (Blueprint $table) {
            $table->comment('T_パスワードリセット_管理者');
            $table->string('email')->primary()->comment('メールアドレス');
            $table->string('token')->nullable()->comment('トークン');
            $table->timestamp('created_at')->nullable()->comment('作成日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_password_reset_tokens_admin');
    }
};
