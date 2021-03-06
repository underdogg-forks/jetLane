<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loan_title');
            $table->string('loan_subtitle');
            $table->integer('fha');
            $table->integer('va');
            $table->integer('conventional');
            $table->string('term');
            $table->double('rate');
            $table->double('min_down_payment');
            $table->integer('bankrupcy_burnoff');
            $table->double('lender_fee');
            $table->integer('min_fico');
            $table->double('origination_fee');
            $table->integer('owner_occupant_only');
            $table->integer('second_home');
            $table->integer('two_loans');
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
        Schema::drop('loans');
    }
}
