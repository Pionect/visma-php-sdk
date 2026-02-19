<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ProjectBillingPeriodEnum;
use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Project in ProjectController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectDtoFactory testFactory()
 */
class ProjectDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('internalID')]
        public ?int $internalId = null,
        /** Mandatory field: The top part > Project ID* > The unique ID for the project. */
        #[MapName('projectID')]
        public ?string $projectId = null,
        public ?CustomerInProjectDto $customer = null,
        /**
         * The top part > Hold > A check box that you select to indicate that the
         * project should have the In planning status.
         */
        public ?bool $hold = null,
        /**
         * The top part > Status > The status of the project, which can be one of the
         * following options: In planning, Active, Completed, Suspended, Cancelled.
         */
        public ?TemplateNumberDescriptionStatusEnum $status = null,
        public ?TemplateInProjectDto $template = null,
        /**
         * Mandatory field: The top part > Description* > The description of the
         * project.
         */
        public ?string $description = null,
        /** The top part > Assest > The actual assets for the project. */
        public int|float|null $assets = null,
        /** The top part > Liabilities > The actual liabilities for the project. */
        public int|float|null $liability = null,
        /** The top part > Income > The income expected from the project. */
        public int|float|null $income = null,
        /**
         * The top part > Expenses > The total of the current expenses incurred by the
         * project.
         */
        public int|float|null $expenses = null,
        /**
         * Mandatory field: Summary tab > Project properties section > Start date* > The
         * date when the project starts.
         */
        public ?\Carbon\Carbon $startDate = null,
        /**
         * Summary tab > Project properties section > End date > The date when the
         * project is expected to end.
         */
        public ?\Carbon\Carbon $endDate = null,
        public ?ProjectManagerInProjectDto $projectManager = null,
        /**
         * Summary tab > Project properties section > Restrict employees > A check box
         * that indicates (if selected) that only the employees listed on the Employees
         * tab of this window can create activities and documents associated with the
         * current project.
         */
        public ?bool $restrictEmployees = null,
        public ?bool $restrictEquipment = null,
        public ?VisibilityInProjectDto $visibility = null,
        public ?DefAccountInProjectDto $defAccount = null,
        public ?DefSubInProjectDto $defSub = null,
        public ?DefAccrualAccountInProjectDto $defAccrualAccount = null,
        public ?DefAccrualSubInProjectDto $defAccrualSub = null,
        /**
         * Summary tab > Invoicing and allocation settings section > Invoicing period >
         * The frequency of invoicing, which can be one of the following options: Week,
         * Month, Quarter, Year, On demand.
         */
        public ?ProjectBillingPeriodEnum $billingPeriod = null,
        /**
         * Summary tab > Invoicing and allocation settings section > Next invoicing date
         * > The date for which the next invoicing is scheduled for the project.
         */
        public ?\Carbon\Carbon $nextBillingDate = null,
        /**
         * Summary tab > Invoicing and allocation settings section > Last invoicing date
         * > The date when the latest invoicing was performed for the project.
         */
        public ?\Carbon\Carbon $lastBillingDate = null,
        public ?CustomerLocationInProjectDto $customerLocation = null,
        public ?AllocationRuleInProjectDto $allocationRule = null,
        public ?BillingRuleInProjectDto $billingRule = null,
        public ?BranchInProjectDto $branch = null,
        public ?RateTableInProjectDto $rateTable = null,
        /**
         * Summary tab > Invoicing and allocation settings section > Run allocation when
         * you release project transactions > A check box that indicates (if selected)
         * that allocation is run automatically during the release of the documents
         * associated with this project.
         */
        public ?bool $autoAllocate = null,
        /**
         * Summary tab > Invoicing and allocation settings section > Automatically
         * release customer documents > A check box that indicates (if selected) that
         * invoice documents are released automatically after the project invoicing is
         * completed.
         */
        public ?bool $automaticReleaseAr = null,
        /** System generated information */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * @var TaskDto[]|null
         *                     Tasks tab >
         */
        public ?array $tasks = null,
        /**
         * @var EmployeeDto[]|null
         *                         The Employees tab > Information in this tab is retreived from EP203000
         *                         (Employees)
         */
        public ?array $employees = null,
        public ?string $publicId = null,
        public ?bool $systemTemplate = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        /**
         * @var AttributeIdValueDto[]|null
         *                                 Attributes tab >
         */
        public ?array $attributes = null,
        /** The note on the project. */
        public ?string $note = null,
        public ?string $errorInfo = null,
    ) {}
}
