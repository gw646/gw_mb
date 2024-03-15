<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('complaint_forms', function (Blueprint $table) {
            $table->id();
            $table->string('complainant_name')->nullable();
            $table->string('complainant_address')->nullable();
            $table->string('complainant_phone')->nullable();
            $table->string('practitioner_name')->nullable();
            $table->string('practitioner_address')->nullable();
            $table->string('practitioner_phone')->nullable();
            $table->string('complaint_type')->nullable();
            $table->text('incident_details')->nullable();
            $table->date('incident_date')->nullable();
            $table->time('time')->nullable();
            $table->string('documents')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('complaint_forms');
    }
};
