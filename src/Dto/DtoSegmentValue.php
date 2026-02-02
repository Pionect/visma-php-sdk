<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DtoSegmentValueFactory testFactory()
 */
class DtoSegmentValue extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $internalId = null,
        public ?int $segmentId = null,
        public ?string $valueId = null,
        public ?string $description = null,
        public ?string $publicId = null,
        public ?bool $active = null,
        public ?string $timeStamp = null,
        public ?\Carbon\Carbon $lastModified = null,
        public ?string $mappedSegValue = null,
    ) {}
}
