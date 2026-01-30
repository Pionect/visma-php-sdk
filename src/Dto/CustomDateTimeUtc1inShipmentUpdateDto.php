<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type DateTime - in UTC timezone
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomDateTimeUtc1inShipmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomDateTimeUtc1inShipmentUpdateDtoFactory factory()
 */
class CustomDateTimeUtc1inShipmentUpdateDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $value = null,
    ) {}
}
