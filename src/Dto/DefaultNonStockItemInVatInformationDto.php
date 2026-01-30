<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT settings tab &gt; Default non-stock item &gt; The default non-stock item for the VAT ID.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultNonStockItemInVatInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultNonStockItemInVatInformationDtoFactory testFactory()
 */
class DefaultNonStockItemInVatInformationDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
