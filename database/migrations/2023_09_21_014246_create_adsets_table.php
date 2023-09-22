<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adsets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
            $table->string('headline')->nullable();
            $table->string('description')->nullable();
            $table->string('site_url')->nullable();
            $table->string('targeting')->nullable();
            $table->string('category_name')->nullable();
            $table->string('media_file')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('adsets');
    }
}
