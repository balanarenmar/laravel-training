<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('account_id')->constrained();
            $table->string('first_name');
            $table->string('middle_initial', 1);
            $table->string('last_name');
            $table->enum('status', ['deployed', 'undeployed', 'finished'])->default('undeployed');
            $table->date('date_started')->nullable();
            $table->date('date_completed')->nullable();
            $table->string('company');
            $table->integer('hrs_rendered');
            $table->integer('hrs_remaining');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
