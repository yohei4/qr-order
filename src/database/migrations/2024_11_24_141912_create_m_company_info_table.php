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
        Schema::create('m_company_info', function (Blueprint $table) {
            $table->comment('M_企業情報');
            $table->string('code', 20)->primary()->comment('コード');
            $table->string('company_name')->nullable()->comment('企業名');
            $table->integer('industry')->nullable()->comment('業種');
            $table->date('establishment_date')->nullable()->comment('設立日');
            $table->string('postal_code', 7)->nullable()->comment('郵便番号');
            $table->integer('prefecture')->nullable()->comment('都道府県');
            $table->string('city', 100)->nullable()->comment('市区町村');
            $table->string('street_address')->nullable()->comment('番地');
            $table->string('building_name')->nullable()->comment('建物名・部屋番号');
            $table->string('tel', 15)->nullable()->comment('TEL');
            $table->string('fax', 15)->nullable()->comment('FAX');
            $table->integer('employee_count')->nullable()->comment('従業員数');
            $table->string('web_site_url')->nullable()->comment('WEBサイトURL');
            $table->string('logo')->nullable()->comment('ロゴ');
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
        Schema::dropIfExists('m_company_info');
    }
};
