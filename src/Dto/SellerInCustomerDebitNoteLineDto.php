<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Salesperson ID &gt; The identifier of the salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SellerInCustomerDebitNoteLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SellerInCustomerDebitNoteLineDtoFactory factory()
 */
class SellerInCustomerDebitNoteLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
