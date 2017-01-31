<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function(Blueprint $table) {
            // 数据标识
            $table->increments('id');
            // 分部名称
            $table->string('name')->unique();
            // 所在城市
            $table->string('location');
            // 负责人
            $table->string('manager');
            // 城市
            $table->string('city');
            // 省
            $table->string('state');
            // 区/县
            $table->string('region');
            // 经营范围
            $table->string('business_scope')->nullable();
            // 详细地址
            $table->string('address')->nullable();
            // 联系电话
            $table->string('phone')->nullable();
            // 社会化联系方式
            $table->string('social')->nullable();
            // 缩略图
            $table->string('thumbnail')->nullable();
            // 数据状态
            $table->smallInteger('status')->default(10);
            // 微信
            $table->string('weixin')->nullable();
            // 微博
            $table->string('weibo')->nullable();
            // 淘宝
            $table->string('qq')->nullable();
            // 主页
            $table->string('homepage')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contents');
    }
}
