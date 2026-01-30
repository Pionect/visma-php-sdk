<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DtoSegmentValueFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DtoSegmentValueFactory factory()
 */
class DtoSegmentValue extends Model
{
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
