<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoSegmentValue extends Model
{
    /** Unique identifier for the segment value */
    #[Property]
    public ?string $internalId;

    /** The top part &gt; Segment ID &gt; The system-generated number representing the order of the segment in the segmented key. */
    #[Property]
    public ?int $segmentId;

    /** The table &gt; Value &gt; The string that is the value of the selected segment. */
    #[Property]
    public ?string $valueId;

    /** The table &gt; Description &gt; The user-defined segment description. */
    #[Property]
    public ?string $description;

    #[Property]
    public ?string $publicId;

    /** The table &gt; Active &gt; A check box that indicates (if selected) that the value is active. */
    #[Property]
    public ?bool $active;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModified;

    #[Property]
    public ?string $mappedSegValue;
}
