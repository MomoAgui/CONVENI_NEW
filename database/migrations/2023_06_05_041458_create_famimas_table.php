<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('famimas', function (Blueprint $table) {
            $table->id();
            $table->string('famima_name', 128)->comment('商品名');
            $table->string('famima_allergy',128)->comment('特定原材料アレルギー');
            $table->integer('famima_kcal')->comment('熱量カロリー');
            $table->float('famima_suger',8,2)->comment('糖質');
            $table->float('famima_solt',8,2)->comment('食塩相当量');
            $table->text('famima_detail')->comment('備考');
            $table->unsignedBigInteger('famima_user_id')->comment('このタスクの所有者');
            $table->foreign('famima_user_id')->references('id')->on('users'); // 外部キー制約
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->collation ='utf8mb4_bin';
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('famimas');
    }
}
