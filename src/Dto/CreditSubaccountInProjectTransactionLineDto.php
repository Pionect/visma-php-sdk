<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Credit subaccount &gt; 	For released transactions, the subaccount the transaction credited when it
 * was released; for unreleased transactions, the subaccount the transaction credits if it is released.
 *
 * @method static \Pionect\VismaSdk\Factories\CreditSubaccountInProjectTransactionLineDtoFactory testFactory()
 */
class CreditSubaccountInProjectTransactionLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CreditSubaccountInProjectTransactionLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
