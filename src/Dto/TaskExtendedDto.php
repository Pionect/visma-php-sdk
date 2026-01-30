<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaskExtendedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaskExtendedDtoFactory factory()
 */
class TaskExtendedDto extends Model
{
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
        public ?array $employees = null,
        public ?array $attributes = null,
    ) {}
}
