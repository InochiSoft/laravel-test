<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudienceDesignersTable extends Migration
{
    public function up()
    {
        Schema::create('audience_designers', function (Blueprint $table) {
            $table->unsignedBigInteger('audience_id');
            $table->unsignedBigInteger('designer_id');
            $table->foreign('audience_id')->references('id')->on('audiences');
            $table->foreign('designer_id')->references('id')->on('designers');
            $table->primary(['audience_id', 'designer_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('audience_designers');
    }
}
