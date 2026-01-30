<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a Project in ProjectController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectDtoFactory factory()
 */
class ProjectDto extends Model
{
    public function __construct(
        #[MapName('internalID')]
        public ?int $internalId = null,
        #[MapName('projectID')]
        public ?string $projectId = null,
        public ?CustomerInProjectDto $customer = null,
        public ?bool $hold = null,
        public ?string $status = null,
        public ?TemplateInProjectDto $template = null,
        public ?string $description = null,
        public int|float|null $assets = null,
        public int|float|null $liability = null,
        public int|float|null $income = null,
        public int|float|null $expenses = null,
        public ?\Carbon\Carbon $startDate = null,
        public ?\Carbon\Carbon $endDate = null,
        public ?ProjectManagerInProjectDto $projectManager = null,
        public ?bool $restrictEmployees = null,
        public ?bool $restrictEquipment = null,
        public ?VisibilityInProjectDto $visibility = null,
        public ?DefAccountInProjectDto $defAccount = null,
        public ?DefSubInProjectDto $defSub = null,
        public ?DefAccrualAccountInProjectDto $defAccrualAccount = null,
        public ?DefAccrualSubInProjectDto $defAccrualSub = null,
        public ?string $billingPeriod = null,
        public ?\Carbon\Carbon $nextBillingDate = null,
        public ?\Carbon\Carbon $lastBillingDate = null,
        public ?CustomerLocationInProjectDto $customerLocation = null,
        public ?AllocationRuleInProjectDto $allocationRule = null,
        public ?BillingRuleInProjectDto $billingRule = null,
        public ?BranchInProjectDto $branch = null,
        public ?RateTableInProjectDto $rateTable = null,
        public ?bool $autoAllocate = null,
        public ?bool $automaticReleaseAr = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $tasks = null,
        public ?array $employees = null,
        public ?string $publicId = null,
        public ?bool $systemTemplate = null,
        public ?string $timeStamp = null,
        public ?array $attributes = null,
        public ?string $note = null,
        public ?string $errorInfo = null,
    ) {}
}
