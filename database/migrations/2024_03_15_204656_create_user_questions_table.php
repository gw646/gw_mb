<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0);
            $table->enum('is_suspended',['Yes','No'])->default('No');
            $table->date('effective_suspended')->nullable();
            $table->string('country_suspended')->nullable();
            $table->string('state_province_suspended')->nullable();
            $table->string('medical_board_suspended')->nullable();
            $table->string('reason_for_action_suspended')->nullable();
            $table->enum('is_denied',['Yes','No'])->default('No');
            $table->date('notice_denied')->nullable();
            $table->string('country_denied')->nullable();
            $table->string('state_province_denied')->nullable();
            $table->string('medical_board_denied')->nullable();
            $table->string('reason_for_action_denied')->nullable();
            $table->enum('is_guilty',['Yes','No'])->default('No');
            $table->date('decision_guilty')->nullable();
            $table->string('country_guilty')->nullable();
            $table->string('state_province_guilty')->nullable();
            $table->string('medical_board_guilty')->nullable();
            $table->text('explanation_of_guilty')->nullable();
            $table->enum('investigation',['Yes','No'])->default('No');
            $table->date('date_investigation')->nullable();
            $table->string('country_investigation')->nullable();
            $table->string('state_investigation')->nullable();
            $table->string('medical_board_investigation')->nullable();
            $table->text('explanation_investigation')->nullable();
            $table->enum('review',['Yes','No'])->default('No');
            $table->date('review_date')->nullable();
            $table->string('country_review')->nullable();
            $table->string('state_province_review')->nullable();
            $table->string('medical_board_review')->nullable();
            $table->text('explanation_review')->nullable();
            $table->string('medical_councils1')->nullable();
            $table->string('medical_councils2')->nullable();
            $table->enum('agree',['Yes','No'])->default('No');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_questions');
    }
};
