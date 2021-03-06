<?php
namespace ATWS\AutotaskObjects;

class AccountNote extends Entity
{
    // Required
    public $AccountID;
    public $ActionType;
    public $AssignedResourceID;
    public $EndDateTime;
    public $StartDateTime;

    // Optional
    public $CompletedDateTime;
    public $ContactID;
    public $CreateDateTime;
    public $ImpersonatorCreatorResourceID;
    public $ImpersonatorUpdaterResourceID;
    public $LastModifiedDate;
    public $Name;
    public $Note;
    public $OpportunityID;
}
