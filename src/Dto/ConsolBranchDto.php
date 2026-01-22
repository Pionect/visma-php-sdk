<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ConsolBranchDto extends Model
{
    /** Click the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
