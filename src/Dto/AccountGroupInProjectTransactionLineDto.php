<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Account group &gt; The account group of the debit side account of the transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\AccountGroupInProjectTransactionLineDtoFactory testFactory()
 */
class AccountGroupInProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
