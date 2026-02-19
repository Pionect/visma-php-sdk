<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DtoSegmentFactory testFactory()
 */
class DtoSegment extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Unique identifier for the segment. */
        public ?string $internalId = null,
        /**
         * Segment ID > The system-generated number representing the order of the
         * segment in the segmented key.
         */
        public ?int $segmentId = null,
        /** Mandatory field: Description > The user-defined segment description. */
        public ?string $description = null,
        /** Length > The maximum length of the segment. */
        public ?int $length = null,
        public ?string $publicId = null,
        public ?string $timeStamp = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModified = null,
        /**
         * Validate > A check box that indicates (if selected) that validation of
         * segment values is turned on.
         */
        public ?bool $validate = null,
        /**
         * @var DtoSegmentValue[]|null
         */
        public ?array $segmentValues = null,
        /**
         * Select segment and click View segment > Auto number > A check box that
         * indicates (if selected) that the number series selected in the Number series
         * ID field will be used to generate values for this segment in IDs.
         */
        public ?bool $isAutoNumber = null,
        /**
         * Select segment and click View segment > Number of characters > The length (in
         * characters) of the string in the parent's subaccount to which the segment
         * value is mapped; this column is displayed for only the SUBACCOUNT key.
         */
        public ?int $consolNumChar = null,
        /**
         * Select segment and click View segment > Consol. order > The number that
         * represents the order of this string among other strings in the parent
         * company's subaccount; this column is displayed for only the SUBACCOUNT key.
         */
        public ?int $consolOrder = null,
    ) {}
}
