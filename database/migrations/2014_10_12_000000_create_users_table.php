<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avater')->nullable();
            $table->string('location')->nullable();
            $table->text('bio')->nullable();
            $table->string('languages')->nullable();
            $table->string('principal_place_of_practice')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('registration_number')->nullable();
            $table->date('registration_expiry')->nullable();
            $table->date('date_of_first_registration')->nullable();
            $table->string('profession')->nullable();
            $table->string('specialist')->nullable();
            $table->string('registration_status')->nullable();
            $table->string('file')->nullable();
            $table->enum('status',['Active','Inactive','Suspended','Pending'])->default('Active');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
