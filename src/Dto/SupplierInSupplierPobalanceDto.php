<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The name of the supplier
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInSupplierPobalanceDtoFactory testFactory()
 */
class SupplierInSupplierPobalanceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
