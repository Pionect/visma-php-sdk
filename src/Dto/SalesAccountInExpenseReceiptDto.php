<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Financial details section &gt; Sales account &gt; The sales account to
 * which the system records the part of the amount to charge the customer for.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesAccountInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesAccountInExpenseReceiptDtoFactory factory()
 */
class SalesAccountInExpenseReceiptDto extends Model
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
