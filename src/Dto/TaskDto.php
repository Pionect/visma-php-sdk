<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaskDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaskDtoFactory testFactory()
 */
class TaskDto extends Model
{
    public function __construct(
        public ?string $taskId = null,
        public ?string $description = null,
        public ?\Carbon\Carbon $plannedStart = null,
        public ?\Carbon\Carbon $plannedEnd = null,
        public ?\Carbon\Carbon $startDate = null,
        public ?\Carbon\Carbon $endDate = null,
        public ?BranchInTaskDto $branch = null,
        public ?RateTableIdDescriptionDto $rateTable = null,
        public ?string $status = null,
        public ?bool $restrictEmployees = null,
        public ?VisibilityDto $visibility = null,
        public ?string $timeStamp = null,
        public ?array $employees = null,
        public ?array $attributes = null,
    ) {}
}
