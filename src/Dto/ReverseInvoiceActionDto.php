<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReverseInvoiceActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReverseInvoiceActionDtoFactory testFactory()
 */
class ReverseInvoiceActionDto extends Model
{
    public function __construct(
        public ?bool $returnCreditNote = null,
    ) {}
}
