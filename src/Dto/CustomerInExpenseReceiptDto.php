<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Financial details section &gt; Customer &gt; The customer, which should be
 * specified if the employee incurred the expenses while working for a particular customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInExpenseReceiptDtoFactory factory()
 */
class CustomerInExpenseReceiptDto extends Model
{
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
