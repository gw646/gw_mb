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
            $table->enum('suspended',['Yes','No'])->default('No');
            $table->date('effectiveDateSuspended')->nullable();
            $table->string('countrySuspended')->nullable();
            $table->string('stateProvinceSuspended')->nullable();
            $table->string('medicalBoardSuspended')->nullable();
            $table->string('reasonForActionSuspended')->nullable();
            $table->enum('denied',['Yes','No'])->default('No');
            $table->date('noticeDateDenied')->nullable();
            $table->string('countryDenied')->nullable();
            $table->string('stateProvinceDenied')->nullable();
            $table->string('medicalBoardDenied')->nullable();
            $table->string('reasonForDenial')->nullable();

            $table->enum('guilty',['Yes','No'])->default('No');
            $table->date('decisionDateGuilty')->nullable();
            $table->string('countryGuilty')->nullable();
            $table->string('stateProvinceGuilty')->nullable();
            $table->string('medicalBoardGuilty')->nullable();
            $table->text('explanationOfGuilty')->nullable();
            $table->enum('investigation',['Yes','No'])->default('No');
            $table->date('investigationDate')->nullable();
            $table->string('countryInvestigation')->nullable();
            $table->string('stateProvinceInvestigation')->nullable();
            $table->string('medicalBoardInvestigation')->nullable();
            $table->text('explanationInvestigation')->nullable();
            $table->enum('review',['Yes','No'])->default('No');
            $table->date('reviewDate')->nullable();
            $table->string('countryReview')->nullable();
            $table->string('stateProvinceReview')->nullable();
            $table->string('medicalBoardReview')->nullable();
            $table->text('explanationReview')->nullable();
            $table->string('medicalCouncils1')->nullable();
            $table->string('medicalCouncils2')->nullable();
            $table->enum('ethics',['Yes','No'])->default('No');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_questions');
    }
};
