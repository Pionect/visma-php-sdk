<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetTransactionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetTransactionDtoFactory factory()
 */
class FixedAssetTransactionDto extends Model
{
    /** The referance number for this fixed asset transaction */
    #[Property]
    public ?string $refNo;

    /** The line number of this fixed asset transaction */
    #[Property]
    public ?int $lineNo;

    /** The branch id for this fixed asset transaction */
    #[Property]
    public ?string $branchId;

    /** The origin of this fixed asset transaction. Origin can be */
    #[Property]
    public ?string $origin;

    /** The asset id this fixed asset transaction belongs to */
    #[Property]
    public ?string $assetId;

    /** The description of this fixed asset transaction */
    #[Property]
    public ?string $transactionDescription;

    /** The book id for this fixed asset transaction */
    #[Property]
    public ?string $bookId;

    /** Type can be */
    #[Property]
    public ?string $transactionType;

    #[Property]
    public ?accountsInFixedAssetTransactionDto $accounts;

    /** The amount of this fixed asset transaction */
    #[Property]
    public ?float $transactionAmount;

    /** The batch number of the general ledger transaction for this fixed asset transaction */
    #[Property]
    public ?string $batchNo;

    /** The transaction period id for this fixed asset transaction */
    #[Property]
    public ?string $transactionPeriodId;

    /** The transaction date for this fixed asset transaction */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $transactionDate;

    #[Property]
    public ?registerInFixedAssetTransactionDto $register;

    /** A system generated date/time that indicates the last change for this fixed asset transaction */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $errorInfo;
}
