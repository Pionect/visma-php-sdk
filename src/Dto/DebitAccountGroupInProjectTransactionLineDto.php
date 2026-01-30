<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Debit Account group &gt; The account group of the debit side account of the transaction. This field
 * has been deprecated and will be removed in future versions. Use DebitAccountGroup.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DebitAccountGroupInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DebitAccountGroupInProjectTransactionLineDtoFactory factory()
 */
class DebitAccountGroupInProjectTransactionLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
