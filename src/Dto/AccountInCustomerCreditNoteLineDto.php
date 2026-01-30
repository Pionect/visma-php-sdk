<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Account* &gt; The sales account used for the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountInCustomerCreditNoteLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountInCustomerCreditNoteLineDtoFactory factory()
 */
class AccountInCustomerCreditNoteLineDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
