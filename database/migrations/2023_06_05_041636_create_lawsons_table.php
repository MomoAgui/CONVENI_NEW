<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawsonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawsons', function (Blueprint $table) {
            $table->id();
            $table->string('lawson_name', 128)->comment('商品名');
            $table->string('lawson_allergy',128)->comment('特定原材料アレルギー');
            $table->integer('lawson_kcal')->comment('熱量カロリー');
            $table->float('lawson_suger',8,2)->comment('糖質');
            $table->float('lawson_solt',8,2)->comment('食塩相当量');
            $table->text('lawson_detail')->comment('備考');
            $table->unsignedBigInteger('lawson_user_id')->comment('このタスクの所有者');
            $table->foreign('lawson_user_id')->references('id')->on('users'); // 外部キー制約
            //$table->timestamps();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->collation ='utf8mb4_bin';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lawsons');
    }
}
