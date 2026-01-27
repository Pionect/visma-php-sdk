<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class RotRutBasicDto extends Model
{
    #[Property]
    public ?bool $distributedAutomaticaly;

    #[Property]
    public ?string $type;

    #[Property]
    public ?string $appartment;

    #[Property]
    public ?string $estate;

    #[Property]
    public ?string $organizationNbr;

    #[Property]
    public ?array $distribution;
}
