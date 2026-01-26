<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Project in ProjectController. Used for getting data.
 */
class ProjectDto extends Model
{
    #[Property]
    public ?int $internalId;

    /** Mandatory field: The top part &gt; Project ID* &gt; The unique ID for the project. */
    #[Property]
    public ?string $projectId;

    #[Property]
    public ?\customerInProjectDto $customer;

    /** The top part &gt; Hold &gt; A check box that you select to indicate that the project should have the In planning status. */
    #[Property]
    public ?bool $hold;

    /** The top part &gt; Status &gt; The status of the project, which can be one of the following options: In planning, Active, Completed, Suspended, Cancelled. */
    #[Property]
    public ?string $status;

    #[Property]
    public ?\templateInProjectDto $template;

    /** Mandatory field: The top part &gt; Description* &gt; The description of the project. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Assest &gt; The actual assets for the project. */
    #[Property]
    public ?float $assets;

    /** The top part &gt; Liabilities &gt; The actual liabilities for the project. */
    #[Property]
    public ?float $liability;

    /** The top part &gt; Income &gt; The income expected from the project. */
    #[Property]
    public ?float $income;

    /** The top part &gt; Expenses &gt; The total of the current expenses incurred by the project. */
    #[Property]
    public ?float $expenses;

    /** Mandatory field: Summary tab &gt; Project properties section &gt; Start date* &gt; The date when the project starts. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;

    /** Summary tab &gt; Project properties section &gt; End date &gt; The date when the project is expected to end. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $endDate;

    #[Property]
    public ?\projectManagerInProjectDto $projectManager;

    /** Summary tab &gt; Project properties section &gt; Restrict employees &gt; A check box that indicates (if selected) that only the employees listed on the Employees tab of this window can create activities and documents associated with the current project. */
    #[Property]
    public ?bool $restrictEmployees;

    #[Property]
    public ?bool $restrictEquipment;

    #[Property]
    public ?\visibilityInProjectDto $visibility;

    #[Property]
    public ?\defAccountInProjectDto $defAccount;

    #[Property]
    public ?\defSubInProjectDto $defSub;

    #[Property]
    public ?\defAccrualAccountInProjectDto $defAccrualAccount;

    #[Property]
    public ?\defAccrualSubInProjectDto $defAccrualSub;

    /** Summary tab &gt; Invoicing and allocation settings section &gt; Invoicing period &gt; The frequency of invoicing, which can be one of the following options: Week, Month, Quarter, Year, On demand. */
    #[Property]
    public ?string $billingPeriod;

    /** Summary tab &gt; Invoicing and allocation settings section &gt; Next invoicing date &gt; The date for which the next invoicing is scheduled for the project. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $nextBillingDate;

    /** Summary tab &gt; Invoicing and allocation settings section &gt; Last invoicing date &gt; The date when the latest invoicing was performed for the project. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastBillingDate;

    #[Property]
    public ?\customerLocationInProjectDto $customerLocation;

    #[Property]
    public ?\allocationRuleInProjectDto $allocationRule;

    #[Property]
    public ?\billingRuleInProjectDto $billingRule;

    #[Property]
    public ?\branchInProjectDto $branch;

    #[Property]
    public ?\rateTableInProjectDto $rateTable;

    /** Summary tab &gt; Invoicing and allocation settings section &gt; Run allocation when you release project transactions &gt; A check box that indicates (if selected) that allocation is run automatically during the release of the documents associated with this project. */
    #[Property]
    public ?bool $autoAllocate;

    /** Summary tab &gt; Invoicing and allocation settings section &gt; Automatically release customer documents &gt; A check box that indicates (if selected) that invoice documents are released automatically after the project invoicing is completed. */
    #[Property]
    public ?bool $automaticReleaseAr;

    /** System generated information */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Tasks tab &gt; */
    #[Property]
    public ?array $tasks;

    /** The Employees tab &gt; Information in this tab is retreived from EP203000 (Employees) */
    #[Property]
    public ?array $employees;

    #[Property]
    public ?string $publicId;

    #[Property]
    public ?bool $systemTemplate;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    /** Attributes tab &gt; */
    #[Property]
    public ?array $attributes;

    /** The note on the project. */
    #[Property]
    public ?string $note;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
