<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Financial details section &gt; Sales sub. &gt; The corresponding subaccount
 * the system uses to record the amount to charge the customer for.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesSubInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesSubInExpenseReceiptDtoFactory factory()
 */
class SalesSubInExpenseReceiptDto extends Model
{
    #[Property]
    public ?bool $active;

    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
