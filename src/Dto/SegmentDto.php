<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SegmentDtoFactory testFactory()
 */
class SegmentDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SegmentDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The Segment values window > The Top part > The ID of the segment. */
        public ?int $segmentId = null,
        /** The Segment values window > The Top part > The description of the segment. */
        public ?string $segmentDescription = null,
        /**
         * The Segment values window > The table > The value of the segment,
         * alphanumeric.
         */
        public ?string $segmentValue = null,
        /** The Segment values window > The table > The description of the segment value. */
        public ?string $segmentValueDescription = null,
    ) {}
}
