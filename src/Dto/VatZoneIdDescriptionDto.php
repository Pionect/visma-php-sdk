<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatZoneIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneIdDescriptionDtoFactory testFactory()
 */
class VatZoneIdDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
