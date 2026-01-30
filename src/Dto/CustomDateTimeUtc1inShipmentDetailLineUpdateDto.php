<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type DateTime - in UTC timezone
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomDateTimeUtc1inShipmentDetailLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomDateTimeUtc1inShipmentDetailLineUpdateDtoFactory factory()
 */
class CustomDateTimeUtc1inShipmentDetailLineUpdateDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $value = null,
    ) {}
}
