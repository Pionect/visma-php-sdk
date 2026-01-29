<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Debit Account group &gt; The account group of the credit side account of the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditAccountGroupInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditAccountGroupInProjectTransactionLineDtoFactory factory()
 */
class CreditAccountGroupInProjectTransactionLineDto extends Model
{
    /** Click the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
