<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract', function (Blueprint $table) {
            $table->id();
            $table->string('contract_id')->nullable();
            $table->string('AccountId')->nullable();
            $table->string('Pricebook2Id')->nullable();
            $table->string('OwnerExpirationNotice')->nullable();
            $table->string('StartDate')->nullable();
            $table->string('EndDate')->nullable();
            $table->string('BillingStreet')->nullable();
            $table->string('BillingCity')->nullable();
            $table->string('BillingState')->nullable();
            $table->string('BillingPostalCode')->nullable();
            $table->string('BillingCountry')->nullable();
            $table->string('BillingLatitude')->nullable();
            $table->string('BillingLongitude')->nullable();
            $table->string('BillingGeocodeAccuracy')->nullable();
            $table->string('BillingAddress')->nullable();
            $table->string('ShippingStreet')->nullable();
            $table->string('ShippingCity')->nullable();
            $table->string('ShippingState')->nullable();
            $table->string('ShippingPostalCode')->nullable();
            $table->string('ShippingCountry')->nullable();
            $table->string('ShippingLatitude')->nullable();
            $table->string('ShippingLongitude')->nullable();
            $table->string('ShippingGeocodeAccuracy')->nullable();
            $table->string('ShippingAddress')->nullable();
            $table->string('ContractTerm')->nullable();
            $table->string('OwnerId')->nullable();
            $table->string('Status')->nullable();
            $table->string('CompanySignedId')->nullable();
            $table->string('CompanySignedDate')->nullable();
            $table->string('CustomerSignedId')->nullable();
            $table->string('CustomerSignedTitle')->nullable();
            $table->string('CustomerSignedDate')->nullable();
            $table->string('SpecialTerms')->nullable();
            $table->string('ActivatedById')->nullable();
            $table->string('ActivatedDate')->nullable();
            $table->string('StatusCode')->nullable();
            $table->string('Description')->nullable();
            $table->string('IsDeleted')->nullable();
            $table->string('ContractNumber')->nullable();
            $table->string('LastApprovedDate')->nullable();
           $table->string('CreatedDate')->nullable();
            $table->string('CreatedById')->nullable();
            $table->string('LastModifiedDate')->nullable();
            $table->string('LastModifiedById')->nullable();
            $table->string('SystemModstamp')->nullable();
            $table->string('LastActivityDate')->nullable();
            $table->string('LastViewedDate')->nullable();
            $table->string('LastReferencedDate')->nullable();
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
        Schema::dropIfExists('contract');
    }
}
