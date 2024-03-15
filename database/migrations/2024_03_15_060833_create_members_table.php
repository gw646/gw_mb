<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('username')->nullable();
            $table->string('location')->nullable();
            $table->text('bio')->nullable();
            $table->string('languages')->nullable();
            $table->string('principal_place_of_practice')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('registration_number')->nullable();
            $table->date('registration_expiry')->nullable();
            $table->date('date_of_first_registration')->nullable();
            $table->string('profession')->nullable();
            $table->string('registration_status')->nullable();
            $table->string('file')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
