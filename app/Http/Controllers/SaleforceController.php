<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Contact;
use App\Contract;
use App\Oppourtunity;


class SaleforceController extends Controller
{
    //
    public function store_task(Request $request)
    {
    
        $task=new Task;
        $task->task_id=$request->id;        
        $task->WhoId=$request->WhoId;       
        $task->WhatId=$request->WhatId;      
        $task->WhoCount=$request->WhoCount;    
        $task->WhatCount=$request->WhatCount;   
        $task->Subject=$request->Subject;     
        $task->ActivityDate=$request->ActivityDate;
        $task->Status=$request->Status;      
        $task->Priority=$request->Priority;    
        $task->IsHighPriority=$request->IsHighPriority;
        $task->OwnerId=$request->OwnerId;       
        $task->Description=$request->Description;   
        $task->IsDeleted=$request->IsDeleted;     
        $task->AccountId=$request->AccountId;     
        $task->IsClosed=$request->IsClosed;      
        $task->CreatedDate=$request->CreatedDate;   
        $task->CreatedById=$request->CreatedById;   
        $task->LastModifiedDate=$request->LastModifiedDate;
        $task->LastModifiedById=$request->LastModifiedById;
        $task->SystemModstamp=$request->SystemModstamp;  
        $task->IsArchived=$request->IsArchived;  
        
        $task->CallDurationInSeconds=$request->CallDurationInSeconds;  
        $task->CallType=$request->CallType;  
        $task->CallDisposition=$request->CallDisposition;  
        $task->CallObject=$request->CallObject;  
        $task->ReminderDateTime=$request->ReminderDateTime;  
        $task->IsReminderSet=$request->IsReminderSet;  
        $task->RecurrenceActivityId=$request->RecurrenceActivityId;  
        $task->IsRecurrence=$request->IsRecurrence;  
        $task->RecurrenceStartDateOnly=$request->RecurrenceStartDateOnly;  
        $task->RecurrenceEndDateOnly=$request->RecurrenceEndDateOnly;  
        $task->RecurrenceTimeZoneSidKey=$request->RecurrenceTimeZoneSidKey;  
        $task->RecurrenceType=$request->RecurrenceType;  
        $task->RecurrenceInterval=$request->RecurrenceInterval;  
        $task->RecurrenceDayOfWeekMask=$request->RecurrenceDayOfWeekMask;  
        $task->RecurrenceDayOfMonth=$request->RecurrenceDayOfMonth;  
        $task->RecurrenceInstance=$request->RecurrenceInstance;  
        $task->RecurrenceMonthOfYear=$request->RecurrenceMonthOfYear;  
        $task->RecurrenceRegeneratedType=$request->RecurrenceRegeneratedType;  
        $task->TaskSubtype=$request->TaskSubtype;  
        $task->CompletedDateTime=$request->CompletedDateTime;  
        
        $task->save();
        


        return response()->json(['data' => $request], 200);




        // id         00T0900000MzksKEAR
        // attributes
        // type         Task
        // url         /services/data/v46.0/sobjects/Task/00T0900000MzksKEAR
        // WhoId         0030900000DesgrAAB
        // WhatId         0010900000HfKoTAAV
        // WhoCount         1
        // WhatCount        1
        // Subject        Send Quote
        // ActivityDate        2021-05-29T00:00:00Z
        // Status        Open
        // Priority        Normal
        // IsHighPriority        false
        // OwnerId        00509000005rPFVAA2
        // Description        null
        // IsDeleted        false
        // AccountId        0010900000HfKoTAAV
        // IsClosed        false
        // CreatedDate        2021-05-10T20:35:44Z
        // CreatedById        00509000005rGCeAAM
        // LastModifiedDate        2021-05-10T20:35:44Z
        // LastModifiedById        00509000005rGCeAAM
        // SystemModstamp        2021-05-10T20:35:44Z
        // IsArchived        false
        //    CallDurationInSeconds  null
        //    CallType null
        //    CallDisposition null
        //    CallObject null
        //    ReminderDateTime null
        //    IsReminderSet false
        //    RecurrenceActivityId null
        //    IsRecurrence false
        //    RecurrenceStartDateOnly null
        //    RecurrenceEndDateOnly null
        //    RecurrenceTimeZoneSidKey null
        //    RecurrenceType null
        //    RecurrenceInterval null
        //    RecurrenceDayOfWeekMask null
        //    RecurrenceDayOfMonth null
        //    RecurrenceInstance null
        //    RecurrenceMonthOfYear null
        //    RecurrenceRegeneratedType null
        //    TaskSubtype Task
        //    CompletedDateTime null


    }
    public function store_contact(Request $request)
    {

        
        // return response()->json(['data' => true ], 200);
        $contact=new Contact;
        $contact->contact_id       =$request->id;        
        $contact->IsDeleted        =$request->IsDeleted;
        $contact->MasterRecordId   =$request->MasterRecordId;
        $contact->AccountId        =$request->AccountId;
        $contact->LastName         =$request->LastName;
        $contact->FirstName        =$request->FirstName;
        $contact->Salutation       =$request->Salutation;
        $contact->MiddleName       =$request->MiddleName;
        $contact->Suffix           =$request->Suffix ;
        $contact->Name             =$request->Name;
        $contact->MailingStreet    =$request->MailingStreet;
        $contact->MailingCity      =$request->MailingCity;
        $contact->MailingState     =$request->MailingState;
        $contact->MailingPostalCode=$request->MailingPostalCode;
        $contact->MailingCountry   =$request->MailingCountry;
        $contact->MailingLatitude  =$request->MailingLatitude;
        $contact->MailingLongitude =$request->MailingLongitude;
        $contact->MailingGeocodeAccuracy=$request->MailingGeocodeAccuracy;
        $contact->MailingAddress   =$request->MailingAddress;
        $contact->Phone            =$request->Phone;
        $contact->Fax              =$request->Fax;
        $contact->MobilePhone      =$request->MobilePhone;
        $contact->ReportsToId      =$request->ReportsToId;
        $contact->Email            =$request->Email;
        $contact->Title            =$request->Title;
        $contact->Department       =$request->Department;
        $contact->OwnerId          =$request->OwnerId;
        $contact->CreatedDate      =$request->CreatedDate;
        $contact->CreatedById      =$request->CreatedById;
        $contact->LastModifiedDate =$request->LastModifiedDate;
        $contact->LastModifiedById =$request->LastModifiedById;
        $contact->SystemModstamp   =$request->SystemModstamp;
        $contact->LastActivityDate =$request->LastActivityDate;
        $contact->LastCURequestDate=$request->LastCURequestDate;
        $contact->LastCUUpdateDate =$request->LastCUUpdateDate;
        $contact->LastViewedDate   =$request->LastViewedDate;
        $contact->LastReferencedDate=$request->LastReferencedDate;
        $contact->EmailBouncedReason=$request->EmailBouncedReason;
        $contact->EmailBouncedDate =$request->EmailBouncedDate;
        $contact->IsEmailBounced   =$request->IsEmailBounced;
        $contact->PhotoUrl         =$request->PhotoUrl;
        $contact->Jigsaw           =$request->Jigsaw;
        $contact->JigsawContactId  =$request->JigsawContactId ;    
        $contact->save();




        return response()->json(['data' => true ], 200);



        // id        0030900000DesjpAAB
        // attributes
        // type        Contact
        // url        /services/data/v46.0/sobjects/Contact/0030900000DesjpAAB
        // IsDeleted        false
        // MasterRecordId        null
        // AccountId        0010900000HfKoTAAV
        // LastName        Bertram
        // FirstName        Christoph
        // Salutation        Mr.
        // MiddleName        null
        // Suffix        null
        // Name        Christoph Bertram
        // MailingStreet        null
        // MailingCity        null
        // MailingState        null
        // MailingPostalCode        null
        // MailingCountry        null
        // MailingLatitude        null
        // MailingLongitude        null
        // MailingGeocodeAccuracy        null
        // MailingAddress        null
        // Phone        null
        // Fax        null
        // MobilePhone        null
        // ReportsToId        null
        // Email        null
        // Title        null
        // Department        null
        // OwnerId        00509000005rGCeAAM
        // CreatedDate        2021-05-10T20:33:35Z
        // CreatedById        00509000005rGCeAAM
        // LastModifiedDate        2021-05-10T20:33:35Z
        // LastModifiedById        00509000005rGCeAAM
        // SystemModstamp        2021-05-10T20:33:35Z
        // LastActivityDate        null
        // LastCURequestDate        null
        // LastCUUpdateDate        null
        // LastViewedDate        2021-05-17T06:26:28Z
        // LastReferencedDate        2021-05-17T06:26:28Z
        // EmailBouncedReason        null
        // EmailBouncedDate        null
        // IsEmailBounced        false
        // PhotoUrl        /services/images/photo/0030900000DesjpAAB
        // Jigsaw        null
        // JigsawContactId        null

    }
    public function store_oppourtunity(Request $request)
    {

        

        $oppourtunity=new Oppourtunity;
        $oppourtunity->opportunity_id            =$request->id;
        $oppourtunity->IsDeleted                  =$request->IsDeleted;
        $oppourtunity->AccountId                  =$request->AccountId;
        $oppourtunity->Name                       =$request->Name;
        $oppourtunity->Description                =$request->Description;
        $oppourtunity->StageName                  =$request->StageName;
        $oppourtunity->Amount                     =$request->Amount;
        $oppourtunity->Probability                =$request->Probability;
        $oppourtunity->CloseDate                  =$request->CloseDate;
        $oppourtunity->NextStep                   =$request->NextStep;
        $oppourtunity->LeadSource                 =$request->LeadSource;
        $oppourtunity->IsClosed                   =$request->IsClosed;
        $oppourtunity->IsWon                      =$request->IsWon;
        $oppourtunity->ForecastCategory           =$request->ForecastCategory;
        $oppourtunity->ForecastCategoryName       =$request->ForecastCategoryName;
        $oppourtunity->CampaignId                 =$request->CampaignId;
        $oppourtunity->HasOpportunityLineItem     =$request->HasOpportunityLineItem;
        $oppourtunity->Pricebook2Id               =$request->Pricebook2Id;
        $oppourtunity->OwnerId                    =$request->OwnerId;
        $oppourtunity->CreatedDate                =$request->CreatedDate;
        $oppourtunity->CreatedById                =$request->CreatedById;
        $oppourtunity->LastModifiedDate           =$request->LastModifiedDate;
        $oppourtunity->LastModifiedById           =$request->LastModifiedById;
        $oppourtunity->SystemModstamp             =$request->SystemModstamp;
        $oppourtunity->LastActivityDate           =$request->LastActivityDate;
        $oppourtunity->FiscalQuarter              =$request->FiscalQuarter;
        $oppourtunity->FiscalYear                 =$request->FiscalYear;
        $oppourtunity->Fiscal                     =$request->Fiscal;
        $oppourtunity->ContactId                  =$request->ContactId;
        $oppourtunity->LastViewedDate             =$request->LastViewedDate;
        $oppourtunity->LastReferencedDate         =$request->LastReferencedDate;
        $oppourtunity->SyncedQuoteId              =$request->SyncedQuoteId;
        $oppourtunity->ContractId                 =$request->ContractId;
        $oppourtunity->HasOpenActivity            =$request->HasOpenActivity;
        $oppourtunity->HasOverdueTask             =$request->HasOverdueTask;
        $oppourtunity->Budget_Confirmed__c        =$request->Budget_Confirmed__c;
        $oppourtunity->Discovery_Completed__c     =$request->Discovery_Completed__c;
        $oppourtunity->ROI_Analysis_Completed__c  =$request->ROI_Analysis_Completed__c;
        $oppourtunity->Loss_Reason__c             =$request->Loss_Reason__c;
        $oppourtunity->save();




        return response()->json(['data' => true ], 200);





        // id        00609000007iX6oAAE
        // attributes
        // type        Opportunity
        // url        /services/data/v46.0/sobjects/Opportunity/00609000007iX6oAAE
        // IsDeleted        false
        // AccountId        0010900000HfKoTAAV
        // Name        Web Dashboard
        // Description        null
        // StageName        Proposal
        // Amount        825
        // Probability        75
        // CloseDate        2021-05-29T00:00:00Z
        // Type        null
        // NextStep        null
        // LeadSource        null
        // IsClosed        false
        // IsWon        false
        // ForecastCategory        BestCase
        // ForecastCategoryName        Best Case
        // CampaignId        null
        // HasOpportunityLineItem        false
        // Pricebook2Id        null
        // OwnerId        00509000005rGCeAAM
        // CreatedDate        2021-05-10T20:47:12Z
        // CreatedById        00509000005rGCeAAM
        // LastModifiedDate        2021-05-10T20:47:12Z
        // LastModifiedById        00509000005rGCeAAM
        // SystemModstamp        2021-05-10T20:47:12Z
        // LastActivityDate        null
        // FiscalQuarter        2
        // FiscalYear        2021
        // Fiscal        2021 2
        // ContactId        null
        // LastViewedDate        2021-05-17T06:32:56Z
        // LastReferencedDate        2021-05-17T06:32:56Z
        // SyncedQuoteId        null
        // ContractId        null
        // HasOpenActivity        false
        // HasOverdueTask        false
        // Budget_Confirmed__c        false
        // Discovery_Completed__c        false
        // ROI_Analysis_Completed__c        false
        // Loss_Reason__c        null
    }
    public function store_contract(Request $request)
    {

        
        // return response()->json(['data' => true ], 200);
        $contract=new Contract;
        $contract->contract_id             =$request->id;
        $contract->AccountId               =$request->AccountId;
        $contract->Pricebook2Id            =$request->Pricebook2Id;
        $contract->OwnerExpirationNotice   =$request->OwnerExpirationNotice;
        $contract->StartDate               =$request->StartDate;
        $contract->EndDate                 =$request->EndDate;
        $contract->BillingStreet           =$request->BillingStreet;
        $contract->BillingCity             =$request->BillingCity;
        $contract->BillingState            =$request->BillingState;
        $contract->BillingPostalCode       =$request->BillingPostalCode;
        $contract->BillingCountry          =$request->BillingCountry;
        $contract->BillingLatitude         =$request->BillingLatitude;
        $contract->BillingLongitude        =$request->BillingLongitude;
        $contract->BillingGeocodeAccuracy  =$request->BillingGeocodeAccuracy;
        $contract->BillingAddress          =$request->BillingAddress;
        $contract->ShippingStreet          =$request->ShippingStreet;
        $contract->ShippingCity            =$request->ShippingCity;
        $contract->ShippingState           =$request->ShippingState;
        $contract->ShippingPostalCode      =$request->ShippingPostalCode;
        $contract->ShippingCountry         =$request->ShippingCountry;
        $contract->ShippingLatitude        =$request->ShippingLatitude;
        $contract->ShippingLongitude       =$request->ShippingLongitude;
        $contract->ShippingGeocodeAccuracy =$request->ShippingGeocodeAccuracy;
        $contract->ShippingAddress         =$request->ShippingAddress;
        $contract->ContractTerm            =$request->ContractTerm;
        $contract->OwnerId                 =$request->OwnerId;
        $contract->Status                  =$request->Status;
        $contract->CompanySignedId         =$request->CompanySignedId;
        $contract->CompanySignedDate       =$request->CompanySignedDate;
        $contract->CustomerSignedId        =$request->CustomerSignedId;
        $contract->CustomerSignedTitle     =$request->CustomerSignedTitle;
        $contract->CustomerSignedDate      =$request->CustomerSignedDate;
        $contract->SpecialTerms            =$request->SpecialTerms;
        $contract->ActivatedById           =$request->ActivatedById;
        $contract->ActivatedDate           =$request->ActivatedDate;
        $contract->StatusCode              =$request->StatusCode;
        $contract->Description             =$request->Description;
        $contract->IsDeleted               =$request->IsDeleted;
        $contract->ContractNumber          =$request->ContractNumber;
        $contract->LastApprovedDate        =$request->LastApprovedDate;
        $contract->CreatedDate             =$request->CreatedDate;
        $contract->CreatedById             =$request->CreatedById;
        $contract->LastModifiedDate        =$request->LastModifiedDate;
        $contract->LastModifiedById        =$request->LastModifiedById;
        $contract->SystemModstamp          =$request->SystemModstamp;
        $contract->LastActivityDate        =$request->LastActivityDate;
        $contract->LastViewedDate          =$request->LastViewedDate;
        $contract->LastReferencedDate      =$request->LastReferencedDate;
        $contract->save();



        return response()->json(['data' => true ], 200);




        // id        80009000000tK8MAAU
        // attributes
        // type        Contract
        // url        /services/data/v46.0/sobjects/Contract/80009000000tK8MAAU
        // AccountId        0010900000HfKoTAAV
        // Pricebook2Id        null
        // OwnerExpirationNotice        null
        // StartDate        2021-05-01T00:00:00Z
        // EndDate        2104-07-31T00:00:00Z
        // BillingStreet        null
        // BillingCity        null
        // BillingState        null
        // BillingPostalCode        null
        // BillingCountry        null
        // BillingLatitude        null
        // BillingLongitude        null
        // BillingGeocodeAccuracy        null
        // BillingAddress        null
        // ShippingStreet        null
        // ShippingCity        null
        // ShippingState        null
        // ShippingPostalCode        null
        // ShippingCountry        null
        // ShippingLatitude        null
        // ShippingLongitude        null
        // ShippingGeocodeAccuracy        null
        // ShippingAddress        null
        // ContractTerm        999
        // OwnerId        00509000005rGCeAAM
        // Status        Draft
        // CompanySignedId        null
        // CompanySignedDate        null
        // CustomerSignedId        null
        // CustomerSignedTitle        null
        // CustomerSignedDate        null
        // SpecialTerms        null
        // ActivatedById        null
        // ActivatedDate        null
        // StatusCode        Draft
        // Description        null
        // IsDeleted        false
        // ContractNumber        00000101
        // LastApprovedDate        null
        // CreatedDate        2021-05-10T20:50:30Z
        // CreatedById        00509000005rGCeAAM
        // LastModifiedDate        2021-05-10T20:50:30Z
        // LastModifiedById        00509000005rGCeAAM
        // SystemModstamp        2021-05-10T20:50:30Z
        // LastActivityDate        null
        // LastViewedDate        null
        // LastReferencedDate        null

    }
}
