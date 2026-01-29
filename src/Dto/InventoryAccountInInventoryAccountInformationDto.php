<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Stock items.
 * Inventory account &gt; The asset account to be used to keep the
 * inventory balance resulting from transactions with this stock item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryAccountInInventoryAccountInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryAccountInInventoryAccountInformationDtoFactory factory()
 */
class InventoryAccountInInventoryAccountInformationDto extends Model
{
    #[Property]
    public ?string $type;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
