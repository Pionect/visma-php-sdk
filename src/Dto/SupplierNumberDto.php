<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierNumberDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierNumberDtoFactory factory()
 */
class SupplierNumberDto extends Model
{
    /** The internal id of the supplier */
    #[Property]
    public ?int $internalId;

    /** Click the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
