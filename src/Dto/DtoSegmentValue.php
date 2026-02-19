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
        /** Unique identifier for the segment value */
        public ?string $internalId = null,
        /**
         * The top part > Segment ID > The system-generated number representing the
         * order of the segment in the segmented key.
         */
        public ?int $segmentId = null,
        /** Value > The string that is the value of the selected segment. */
        public ?string $valueId = null,
        /** Description > The user-defined segment description. */
        public ?string $description = null,
        public ?string $publicId = null,
        /** Active > A check box that indicates (if selected) that the value is active. */
        public ?bool $active = null,
        public ?string $timeStamp = null,
        public ?\Carbon\Carbon $lastModified = null,
        public ?string $mappedSegValue = null,
    ) {}
}
