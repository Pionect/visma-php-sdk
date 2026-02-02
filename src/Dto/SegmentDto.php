<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SegmentDtoFactory testFactory()
 */
class SegmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $segmentId = null,
        public ?string $segmentDescription = null,
        public ?string $segmentValue = null,
        public ?string $segmentValueDescription = null,
    ) {}
}
