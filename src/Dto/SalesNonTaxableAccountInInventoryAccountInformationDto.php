<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Sales - non-taxable account &gt; The income account to be used for this stock item to record
 * non-taxable sales.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesNonTaxableAccountInInventoryAccountInformationDtoFactory testFactory()
 */
class SalesNonTaxableAccountInInventoryAccountInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
