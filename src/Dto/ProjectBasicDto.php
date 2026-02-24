<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Project (light weight) in ProjectBasicController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectBasicDtoFactory testFactory()
 */
class ProjectBasicDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ProjectBasicDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('internalID')]
        public ?int $internalId = null,
        /** Mandatory field: The top part > Project ID* > The unique ID for the project. */
        #[MapName('projectID')]
        public ?string $projectId = null,
        public ?CustomerInProjectBasicDto $customer = null,
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
        /**
         * Mandatory field: The top part > Description* > The description of the
         * project.
         */
        public ?string $description = null,
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
        /** Systemgenerated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $publicId = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?VisibilityInProjectBasicDto $visibility = null,
        public ?string $errorInfo = null,
    ) {}
}
