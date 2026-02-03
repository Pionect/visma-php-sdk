<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Purchase Order reference number to add to a Purchase Receipt.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderUpdateDtoFactory testFactory()
 */
class PurchaseReceiptOrderUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $orderNbr = null,
        public ?string $orderType = null,
        /** @var AllocationsUpdateDto[]|null */
        public ?array $allocations = null,
    ) {}
}
