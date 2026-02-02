<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Only used for Stock items.
 * Inventory account &gt; The asset account to be used to keep the
 * inventory balance resulting from transactions with this stock item.
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryAccountInInventoryAccountInformationDtoFactory testFactory()
 */
class InventoryAccountInInventoryAccountInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
