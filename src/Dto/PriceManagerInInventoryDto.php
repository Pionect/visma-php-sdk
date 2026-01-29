<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Price/cost information tab &gt; Price management section &gt; Price manager &gt; The manager
 * responsible for the product pricing.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PriceManagerInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PriceManagerInInventoryDtoFactory factory()
 */
class PriceManagerInInventoryDto extends Model
{
    #[Property]
    public ?string $id;

    #[Property]
    public ?string $name;
}
