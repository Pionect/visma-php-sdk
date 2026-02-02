<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ChangeInventoryNbrActionDtoFactory testFactory()
 */
class ChangeInventoryNbrActionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $inventoryNbr = null,
    ) {}
}
