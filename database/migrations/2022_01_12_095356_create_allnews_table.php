<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allnews', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->default('new post');
            $table->string('title_ar')->default('خبر جديد');
            $table->text('description_en')->default('english description')->nullable();
            $table->text('description_ar')->default('الوصف بالعربي');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allnews');
    }
}
