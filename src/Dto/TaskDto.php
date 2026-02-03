<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TaskDtoFactory testFactory()
 */
class TaskDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
        /** @var EmployeeDto[]|null */
        public ?array $employees = null,
        /** @var AttributeIdValueDto[]|null */
        public ?array $attributes = null,
    ) {}
}
