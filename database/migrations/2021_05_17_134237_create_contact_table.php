<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();    
            $table->string('contact_id')->nullable();
            $table->string('IsDeleted')->nullable();
            $table->string('MasterRecordId')->nullable();
            $table->string('AccountId')->nullable();
            $table->string('LastName')->nullable();
            $table->string('FirstName')->nullable();
            $table->string('Salutation')->nullable();
            $table->string('MiddleName')->nullable();
            $table->string('Suffix')->nullable();
            $table->string('Name')->nullable();
            $table->string('MailingStreet')->nullable();
            $table->string('MailingCity')->nullable();
            $table->string('MailingState')->nullable();
            $table->string('MailingPostalCode')->nullable();
            $table->string('MailingCountry')->nullable();
            $table->string('MailingLatitude')->nullable();
            $table->string('MailingLongitude')->nullable();
            $table->string('MailingGeocodeAccuracy')->nullable();
            $table->string('MailingAddress')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Fax')->nullable();
            $table->string('MobilePhone')->nullable();
            $table->string('ReportsToId')->nullable();
            $table->string('Email')->nullable();
            $table->string('Title')->nullable();
            $table->string('Department')->nullable();
            $table->string('OwnerId')->nullable();
            $table->string('CreatedDate')->nullable();
            $table->string('CreatedById')->nullable();
            $table->string('LastModifiedDate')->nullable();
            $table->string('LastModifiedById')->nullable();
            $table->string('SystemModstamp')->nullable();
            $table->string('LastActivityDate')->nullable();
            $table->string('LastCURequestDate')->nullable();
            $table->string('LastCUUpdateDate')->nullable();
            $table->string('LastViewedDate')->nullable();
            $table->string('LastReferencedDate')->nullable();
            $table->string('EmailBouncedReason')->nullable();
            $table->string('EmailBouncedDate')->nullable();
            $table->string('IsEmailBounced')->nullable();
            $table->string('PhotoUrl')->nullable();
            $table->string('Jigsaw')->nullable();
            $table->string('JigsawContactId')->nullable();
    
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
        Schema::dropIfExists('contact');
    }
}
