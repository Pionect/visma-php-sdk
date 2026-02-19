<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Debit Account group &gt; The account group of the debit side account of the transaction. This field
 * has been deprecated and will be removed in future versions. Use DebitAccountGroup.
 *
 * @method static \Pionect\VismaSdk\Factories\DebitAccountGroupInProjectTransactionLineDtoFactory testFactory()
 */
class DebitAccountGroupInProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
