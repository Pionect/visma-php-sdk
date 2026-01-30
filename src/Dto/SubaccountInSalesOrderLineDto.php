<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Subaccount &gt; A subcategory of the account that carries identifying information.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubaccountInSalesOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountInSalesOrderLineDtoFactory factory()
 */
class SubaccountInSalesOrderLineDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
