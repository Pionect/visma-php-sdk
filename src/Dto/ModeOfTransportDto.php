<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ModeOfTransportDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?int $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
