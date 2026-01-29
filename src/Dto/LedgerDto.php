<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LedgerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LedgerDtoFactory factory()
 */
class LedgerDto extends Model
{
    #[Property]
    public ?int $internalId;

    /** Mandatory field: The top part &gt; Ledger ID* &gt; An alphanumeric string of up to 10 characters used to identify the ledger. */
    #[Property]
    public ?string $number;

    /** The top part &gt; Description &gt; A detailed ledger description. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Balance type &gt; The type of balance in the ledger. Select one of the following predefined types: Actual, Budget, Reporting, Statistical. */
    #[Property]
    public ?string $balanceType;

    /** Mandatory field: The top part &gt; Currency* &gt; The default currency of the ledger. */
    #[Property]
    public ?string $currencyId;

    /** The top part &gt; Consolidation source &gt; A check box that specifies, if selected, that the ledger should be used as a source ledger for consolidation. */
    #[Property]
    public ?bool $consolidationSource;

    #[Property]
    public ?consolBranchInLedgerDto $consolBranch;

    /** The top part &gt; Branch accounting &gt; A check box that you select to indicate that the system should automatically generate inter-branch transactions for this ledger to balance transactions for all branches involved. */
    #[Property]
    public ?bool $branchAccounting;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Branch accounting &gt; True/False */
    #[Property]
    public ?bool $postInterCompany;
}
