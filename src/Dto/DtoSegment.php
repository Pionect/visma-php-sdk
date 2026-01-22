<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoSegment extends Model
{
    /** Unique identifier for the segment. */
    #[Property]
    public ?string $internalId;

    /** Segment ID &gt; The system-generated number representing the order of the segment in the segmented key. */
    #[Property]
    public ?int $segmentId;

    /** Mandatory field: Description &gt; The user-defined segment description. */
    #[Property]
    public ?string $description;

    /** Length &gt; The maximum length of the segment. */
    #[Property]
    public ?int $length;

    #[Property]
    public ?string $publicId;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModified;

    /** Validate &gt; A check box that indicates (if selected) that validation of segment values is turned on. */
    #[Property]
    public ?bool $validate;

    /** The table &gt; */
    #[Property]
    public ?array $segmentValues;

    /** Select segment and click View segment &gt; Auto number &gt; A check box that indicates (if selected) that the number series selected in the Number series ID field will be used to generate values for this segment in IDs. */
    #[Property]
    public ?bool $isAutoNumber;

    /** Select segment and click View segment &gt; Number of characters &gt; The length (in characters) of the string in the parent's subaccount to which the segment value is mapped; this column is displayed for only the SUBACCOUNT key. */
    #[Property]
    public ?int $consolNumChar;

    /** Select segment and click View segment &gt; Consol. order &gt; The number that represents the order of this string among other strings in the parent company's subaccount; this column is displayed for only the SUBACCOUNT key. */
    #[Property]
    public ?int $consolOrder;
}
