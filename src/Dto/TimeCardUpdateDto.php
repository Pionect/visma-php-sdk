<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class TimeCardUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $refNbr;

    #[Property]
    public ?\DtoValueOfString $employee;

    /** Time Card summary information */
    #[Property]
    public ?array $summary;

    /** Time Card Materials information */
    #[Property]
    public ?array $materials;
}
