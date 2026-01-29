<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reference to the order line number that the kit assembly is connected to
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OrderLineNumberInKitAssemblyLinkInsertDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OrderLineNumberInKitAssemblyLinkInsertDtoFactory factory()
 */
class OrderLineNumberInKitAssemblyLinkInsertDto extends Model
{
    #[Property]
    public ?int $value;
}
