<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT settings tab &gt; Default non-stock item &gt; The default non-stock item for the VAT ID.
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultNonStockItemInVatInformationDtoFactory testFactory()
 */
class DefaultNonStockItemInVatInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
