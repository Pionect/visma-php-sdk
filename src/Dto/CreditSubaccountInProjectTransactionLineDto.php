<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Credit subaccount &gt; 	For released transactions, the subaccount the transaction credited when it
 * was released; for unreleased transactions, the subaccount the transaction credits if it is released.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditSubaccountInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditSubaccountInProjectTransactionLineDtoFactory testFactory()
 */
class CreditSubaccountInProjectTransactionLineDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
