<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Subaccount &gt; A subcategory of the account that carries identifying information.
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountInSalesOrderLineDtoFactory testFactory()
 */
class SubaccountInSalesOrderLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
