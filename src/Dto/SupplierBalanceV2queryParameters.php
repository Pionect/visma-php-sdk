<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Query parameters for Suppliers Balance - version 2
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierBalanceV2queryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierBalanceV2queryParametersFactory factory()
 */
class SupplierBalanceV2queryParameters extends Model
{
    public function __construct(
        public ?string $branch = null,
        public ?string $supplier = null,
        public ?string $fromFinPeriod = null,
        public ?string $toFinPeriod = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
