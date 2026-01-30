<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Supplier
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInSupplierBalanceV2dtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInSupplierBalanceV2dtoFactory testFactory()
 */
class SupplierInSupplierBalanceV2dto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
