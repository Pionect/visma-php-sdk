<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SegmentDto extends Model
{
    /** The Segment values window &gt; The Top part &gt; The ID of the segment. */
    #[Property]
    public ?int $segmentId;

    /** The Segment values window &gt; The Top part &gt; The description of the segment. */
    #[Property]
    public ?string $segmentDescription;

    /** The Segment values window &gt; The table &gt; The value of the segment, alphanumeric. */
    #[Property]
    public ?string $segmentValue;

    /** The Segment values window &gt; The table &gt; The description of the segment value. */
    #[Property]
    public ?string $segmentValueDescription;
}
