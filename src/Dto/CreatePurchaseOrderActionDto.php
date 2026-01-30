<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreatePurchaseOrderActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreatePurchaseOrderActionDtoFactory testFactory()
 */
class CreatePurchaseOrderActionDto extends Model
{
    public function __construct(
        public ?string $orderType = null,
        #[MapName('preferSupplierFromSOLine')]
        public ?bool $preferSupplierFromSoline = null,
    ) {}
}
