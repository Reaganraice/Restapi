<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestapisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restapis', function (Blueprint $table) {
            $table->id();
            $table->integer('device')->length(11);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('snr');
            $table->string('station');
            $table->integer('data')->length(11);
            $table->text('avgSnr');
            $table->text('lat');
            $table->text('lng');
            $table->text('rssi');
            $table->string('seqNumber');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restapis');
    }
}