<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('task_id')->nullable();
            $table->string('WhoId')->nullable();
            $table->string('WhatId')->nullable();
            $table->string('WhoCount')->nullable();
            $table->string('WhatCount')->nullable();
            $table->string('Subject')->nullable();
            $table->string('ActivityDate')->nullable();
            $table->string('Status')->nullable();
            $table->string('Priority')->nullable();
            $table->string('IsHighPriority')->nullable();
            $table->string('OwnerId')->nullable();
            $table->string('Description')->nullable();
            $table->string('IsDeleted')->nullable();
            $table->string('AccountId')->nullable();
            $table->string('IsClosed')->nullable();
            $table->string('CreatedDate')->nullable();
            $table->string('CreatedById')->nullable();
            $table->string('LastModifiedDate')->nullable();
            $table->string('LastModifiedById')->nullable();
            $table->string('SystemModstamp')->nullable();
            $table->string('IsArchived')->nullable();

            $table->string('CallDurationInSeconds')->nullable();
            $table->string('CallType')->nullable();
            $table->string('CallDisposition')->nullable();
            $table->string('CallObject')->nullable();
            $table->string('ReminderDateTime')->nullable();
            $table->string('IsReminderSet')->nullable();
            $table->string('RecurrenceActivityId')->nullable();
            $table->string('IsRecurrence')->nullable();
            $table->string('RecurrenceStartDateOnly')->nullable();
            $table->string('RecurrenceEndDateOnly')->nullable();
            $table->string('RecurrenceTimeZoneSidKey')->nullable();
            $table->string('RecurrenceType')->nullable();
            $table->string('RecurrenceInterval')->nullable();
            $table->string('RecurrenceDayOfWeekMask')->nullable();
            $table->string('RecurrenceDayOfMonth')->nullable();
            $table->string('RecurrenceInstance')->nullable();
            $table->string('RecurrenceMonthOfYear')->nullable();
            $table->string('RecurrenceRegeneratedType')->nullable();
            $table->string('TaskSubtype')->nullable();
            $table->string('CompletedDateTime')->nullable();
           

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
        Schema::dropIfExists('task');
    }
}
