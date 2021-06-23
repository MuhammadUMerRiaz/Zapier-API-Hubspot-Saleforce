<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOppourtunityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oppourtunity', function (Blueprint $table) {
            $table->id();
            $table->string('opportunity_id')->nullable();
            $table->string('IsDeleted')->nullable();
            $table->string('AccountId')->nullable();
            $table->string('Name')->nullable();
            $table->string('Description')->nullable();
            $table->string('StageName');
            $table->string('Amount')->nullable();
            $table->string('Probability')->nullable();
            $table->string('CloseDate')->nullable();
            $table->string('NextStep')->nullable();
            $table->string('LeadSource')->nullable();
            $table->string('IsClosed')->nullable();
            $table->string('IsWon')->nullable();
            $table->string('ForecastCategory')->nullable();
            $table->string('ForecastCategoryName')->nullable();
            $table->string('CampaignId')->nullable();
            $table->string('HasOpportunityLineItem')->nullable();
            $table->string('Pricebook2Id')->nullable();
            $table->string('OwnerId')->nullable();
            $table->string('CreatedDate')->nullable();
            $table->string('CreatedById')->nullable();
            $table->string('LastModifiedDate')->nullable();
            $table->string('LastModifiedById')->nullable();
            $table->string('SystemModstamp')->nullable();
            $table->string('LastActivityDate')->nullable();
            $table->string('FiscalQuarter')->nullable();
            $table->string('FiscalYear')->nullable();
            $table->string('Fiscal')->nullable();
            $table->string('ContactId')->nullable();
            $table->string('LastViewedDate')->nullable();
            $table->string('LastReferencedDate')->nullable();
            $table->string('SyncedQuoteId')->nullable();
            $table->string('ContractId')->nullable();
            $table->string('HasOpenActivity')->nullable();
            $table->string('HasOverdueTask')->nullable();
            $table->string('Budget_Confirmed__c')->nullable();
            $table->string('Discovery_Completed__c')->nullable();
            $table->string('ROI_Analysis_Completed__c')->nullable();
            $table->string('Loss_Reason__c')->nullable();
            
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
        Schema::dropIfExists('oppourtunity');
    }
}
