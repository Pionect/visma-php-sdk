<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TaskExtendedDtoFactory testFactory()
 */
class TaskExtendedDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?int $projectInternalId = null,
        public ?DefAccountInTaskExtendedDto $defAccount = null,
        public ?DefSubInTaskExtendedDto $defSub = null,
        public ?DefAccrualAccountInTaskExtendedDto $defAccrualAccount = null,
        public ?DefAccrualSubInTaskExtendedDto $defAccrualSub = null,
        public ?TaxCategoryInTaskExtendedDto $taxCategory = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?string $taskId = null,
        public ?string $description = null,
        public ?\Carbon\Carbon $plannedStart = null,
        public ?\Carbon\Carbon $plannedEnd = null,
        public ?\Carbon\Carbon $startDate = null,
        public ?\Carbon\Carbon $endDate = null,
        public ?BranchInTaskExtendedDto $branch = null,
        public ?RateTableInTaskExtendedDto $rateTable = null,
        public ?string $status = null,
        public ?bool $restrictEmployees = null,
        public ?VisibilityInTaskExtendedDto $visibility = null,
        public ?string $timeStamp = null,
        /** @var EmployeeDto[]|null */
        public ?array $employees = null,
        /** @var AttributeIdValueDto[]|null */
        public ?array $attributes = null,
    ) {}
}
