<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\TaskStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TaskDtoFactory testFactory()
 */
class TaskDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\TaskDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandatory field: > Task ID* > The ID of the task. */
        public ?string $taskId = null,
        /** Mandatory field: Description > The description of the task. */
        public ?string $description = null,
        public ?\Carbon\Carbon $plannedStart = null,
        public ?\Carbon\Carbon $plannedEnd = null,
        /** Start date > The date when the task was actually started. */
        public ?\Carbon\Carbon $startDate = null,
        /** End date > The date when the task was actually finished. */
        public ?\Carbon\Carbon $endDate = null,
        public ?BranchInTaskDto $branch = null,
        public ?RateTableIdDescriptionDto $rateTable = null,
        /**
         * Mandatory field: Status* > The status of the task, which can be one of the
         * following: In planning, Active, Cancelled, Completed.
         */
        public ?TaskStatusEnum $status = null,
        /**
         * Summary tab > Task properties section > Restrict employees > A check box that
         * indicates (if selected) that only the employees listed on the Employees tab
         * of this window can create activities and documents associated with the
         * current task.
         */
        public ?bool $restrictEmployees = null,
        public ?VisibilityDto $visibility = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        /**
         * @var EmployeeDto[]|null
         *                         The Employees tab > Information in this tab is retreived from EP203000
         *                         (Employees)
         */
        public ?array $employees = null,
        /**
         * @var AttributeIdValueDto[]|null
         *                                 Attributes
         */
        public ?array $attributes = null,
    ) {}
}
