<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Project (light weight) in ProjectBasicController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectBasicDtoFactory testFactory()
 */
class ProjectBasicDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('internalID')]
        public ?int $internalId = null,
        #[MapName('projectID')]
        public ?string $projectId = null,
        public ?CustomerInProjectBasicDto $customer = null,
        public ?bool $hold = null,
        public ?string $status = null,
        public ?string $description = null,
        public ?\Carbon\Carbon $startDate = null,
        public ?\Carbon\Carbon $endDate = null,
        public ?bool $autoAllocate = null,
        public ?bool $automaticReleaseAr = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $publicId = null,
        public ?string $timeStamp = null,
        public ?VisibilityInProjectBasicDto $visibility = null,
        public ?string $errorInfo = null,
    ) {}
}
