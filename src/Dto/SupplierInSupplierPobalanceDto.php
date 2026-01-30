<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The name of the supplier
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInSupplierPobalanceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInSupplierPobalanceDtoFactory testFactory()
 */
class SupplierInSupplierPobalanceDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
