<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The alternate type field. Select one of the following predefined types: CPN, VPN, Global, Barcode
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AlternateTypeInCrossReferenceUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AlternateTypeInCrossReferenceUpdateDtoFactory testFactory()
 */
class AlternateTypeInCrossReferenceUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
