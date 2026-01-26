<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class TaskDto extends Model
{
    /** Mandatory field: &gt; Task ID* &gt; The ID of the task. */
    #[Property]
    public ?string $taskId;

    /** Mandatory field: Description &gt; The description of the task. */
    #[Property]
    public ?string $description;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $plannedStart;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $plannedEnd;

    /** Start date &gt; The date when the task was actually started. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;

    /** End date &gt; The date when the task was actually finished. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $endDate;

    #[Property]
    public ?\branchInTaskDto $branch;

    #[Property]
    public ?\RateTableIdDescriptionDto $rateTable;

    /** Mandatory field: Status* &gt; The status of the task, which can be one of the following: In planning, Active, Cancelled, Completed. */
    #[Property]
    public ?string $status;

    /** Summary tab &gt; Task properties section &gt; Restrict employees &gt; A check box that indicates (if selected) that only the employees listed on the Employees tab of this window can create activities and documents associated with the current task. */
    #[Property]
    public ?bool $restrictEmployees;

    #[Property]
    public ?\VisibilityDto $visibility;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    /** The Employees tab &gt; Information in this tab is retreived from EP203000 (Employees) */
    #[Property]
    public ?array $employees;

    /** Attributes */
    #[Property]
    public ?array $attributes;
}
