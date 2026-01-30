<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Account group &gt; The account group of the debit side account of the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountGroupInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountGroupInProjectTransactionLineDtoFactory factory()
 */
class AccountGroupInProjectTransactionLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
