<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Sales - non-taxable account &gt; The income account to be used for this stock item to record
 * non-taxable sales.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesNonTaxableAccountInInventoryAccountInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesNonTaxableAccountInInventoryAccountInformationDtoFactory factory()
 */
class SalesNonTaxableAccountInInventoryAccountInformationDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
