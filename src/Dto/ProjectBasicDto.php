<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Project (light weight) in ProjectBasicController. Used for getting data.
 */
class ProjectBasicDto extends Model
{
    #[Property]
    public ?int $internalId;

    /** Mandatory field: The top part &gt; Project ID* &gt; The unique ID for the project. */
    #[Property]
    public ?string $projectId;

    #[Property]
    public ?customerInProjectBasicDto $customer;

    /** The top part &gt; Hold &gt; A check box that you select to indicate that the project should have the In planning status. */
    #[Property]
    public ?bool $hold;

    /** The top part &gt; Status &gt; The status of the project, which can be one of the following options: In planning, Active, Completed, Suspended, Cancelled. */
    #[Property]
    public ?string $status;

    /** Mandatory field: The top part &gt; Description* &gt; The description of the project. */
    #[Property]
    public ?string $description;

    /** Mandatory field: Summary tab &gt; Project properties section &gt; Start date* &gt; The date when the project starts. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;

    /** Summary tab &gt; Project properties section &gt; End date &gt; The date when the project is expected to end. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $endDate;

    /** Summary tab &gt; Invoicing and allocation settings section &gt; Run allocation when you release project transactions &gt; A check box that indicates (if selected) that allocation is run automatically during the release of the documents associated with this project. */
    #[Property]
    public ?bool $autoAllocate;

    /** Summary tab &gt; Invoicing and allocation settings section &gt; Automatically release customer documents &gt; A check box that indicates (if selected) that invoice documents are released automatically after the project invoicing is completed. */
    #[Property]
    public ?bool $automaticReleaseAr;

    /** Systemgenerated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $publicId;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?visibilityInProjectBasicDto $visibility;

    #[Property]
    public ?string $errorInfo;
}
