<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoDimension extends Model
{
    /** The top part &gt; Length &gt; The total length of the key. */
    #[Property]
    public ?int $length;

    /** Mandatory field: The top part &gt; Description* &gt; A detailed description of the segmented key. */
    #[Property]
    public ?string $description;

    /** The table &gt; */
    #[Property]
    public ?array $segments;
}
