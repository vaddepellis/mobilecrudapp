<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email_id')->nullable();
            $table->string('password')->nullable();
            $table->string('mobile')->nullable();
            $table->string('country_code')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->text('address')->nullable();
            $table->string('age')->nullable();
            $table->text('profile_pic');
            $table->string('proof')->nullable();
            $table->string('proof_number')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('payment_transaction_id')->nullable();
            $table->string('payment_signature')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('sts')->nullable();
            $table->timestamps();
            $table->string('updated_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
