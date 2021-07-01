<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatatokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatokens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proposal_id')->nullable();
            $table->bigInteger('client_id')->nullable();
            $table->string('type')->nullable();
            $table->string('token_id')->nullable();
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
        Schema::dropIfExists('datatokens');
    }
}
