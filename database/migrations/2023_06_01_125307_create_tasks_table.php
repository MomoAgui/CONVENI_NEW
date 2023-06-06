<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128)->comment('商品名');
            $table->string('image');
            $table->string('path');
            $table->string('allergy',128)->comment('特定原材料アレルギー');
            $table->integer('kcal')->comment('熱量カロリー');
            $table->float('suger',8,2)->comment('糖質');
            $table->float('solt',8,2)->comment('食塩相当量');
            $table->text('detail')->comment('備考');
            $table->unsignedBigInteger('user_id')->comment('このタスクの所有者');
            $table->foreign('user_id')->references('id')->on('users'); // 外部キー制約
            $table->integer('conveni_num')->comment('セブンイレブン:1,ファミマ:2,ローソン:3');
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
        Schema::dropIfExists('tasks');
    }
}
