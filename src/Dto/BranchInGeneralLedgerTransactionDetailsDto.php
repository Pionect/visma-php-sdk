<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Branch &gt; The branch of the company.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInGeneralLedgerTransactionDetailsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInGeneralLedgerTransactionDetailsDtoFactory testFactory()
 */
class BranchInGeneralLedgerTransactionDetailsDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
