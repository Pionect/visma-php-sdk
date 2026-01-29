<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReverseInvoiceActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReverseInvoiceActionDtoFactory factory()
 */
class ReverseInvoiceActionDto extends Model
{
    #[Property]
    public ?bool $returnCreditNote;
}
