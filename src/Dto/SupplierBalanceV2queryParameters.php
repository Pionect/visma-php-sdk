<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Query parameters for Suppliers Balance - version 2
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierBalanceV2queryParametersFactory testFactory()
 */
class SupplierBalanceV2queryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $branch = null,
        public ?string $supplier = null,
        public ?string $fromFinPeriod = null,
        public ?string $toFinPeriod = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
