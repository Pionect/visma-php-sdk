<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CreatePurchaseOrderActionDtoFactory testFactory()
 */
class CreatePurchaseOrderActionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandatory field */
        public ?string $orderType = null,
        /** Supplier */
        #[MapName('preferSupplierFromSOLine')]
        public ?bool $preferSupplierFromSoline = null,
    ) {}
}
