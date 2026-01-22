<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represent a Project in Project Controller. Used to pass data to server for creating or
 * updating an project
 */
class ProjectUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $projectId;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $internalId;

    #[Property]
    public ?\DtoValueOfString $customer;

    #[Property]
    public ?\descriptionInProjectUpdateDto $description;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $hold;

    #[Property]
    public ?\DtoValueOfString $template;

    #[Property]
    public ?\DtoValueOfNullableOfProjectStatus $status;

    #[Property]
    public ?\DtoValueOfString $defAccount;

    /** Mandatory field when Project Template is not specified. */
    #[Property]
    public ?array $defSub;

    #[Property]
    public ?\DtoValueOfString $defAccrualAccount;

    #[Property]
    public ?array $defAccrualSub;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $endDate;

    #[Property]
    public ?\DtoValueOfNullableOfBillingPeriod $billingPeriod;

    #[Property]
    public ?\DtoValueOfString $allocationRule;

    #[Property]
    public ?\DtoValueOfString $billingRule;

    #[Property]
    public ?\branchInProjectUpdateDto $branch;

    #[Property]
    public ?\DtoValueOfString $rateTable;

    #[Property]
    public ?\DtoValueOfString $projectManger;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $projectManagerInternalId;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $autoAllocate;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $automaticReleaseArDoc;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $restricEmployees;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $restricEquipment;

    #[Property]
    public ?\DtoValueOfString $customerLocation;

    #[Property]
    public ?\VisibilityUpdateDto $visibility;

    #[Property]
    public ?array $tasks;

    #[Property]
    public ?array $employees;

    #[Property]
    public ?\DtoValueOfString $note;
}
