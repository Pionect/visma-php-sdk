<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Credit account &gt; For released transactions, the account the transaction credited when it was
 * released; for unreleased transactions, the account the transaction credits if it is released.
 *
 * @method static \Pionect\VismaSdk\Factories\CreditAccountInProjectTransactionLineDtoFactory testFactory()
 */
class CreditAccountInProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
