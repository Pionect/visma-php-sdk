<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Branch &gt; The branch of the company.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInGeneralLedgerTransactionDetailsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInGeneralLedgerTransactionDetailsDtoFactory factory()
 */
class BranchInGeneralLedgerTransactionDetailsDto extends Model
{
    /** Click the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
