<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ShipmentUpdateDeleteLineDto extends Model
{
    #[Property]
    public ?\DtoValueOfBoolean $deleteSoline;
}
