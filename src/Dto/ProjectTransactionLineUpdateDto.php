<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTransactionLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTransactionLineUpdateDtoFactory factory()
 */
class ProjectTransactionLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $tranId;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $date;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inventoryId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $quantity;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $billableQuantity;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $unitRate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $amount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $billable;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $financialPeriod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $batchNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $useBillableQty;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $project;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectTask;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $debitAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $debitSubaccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $creditAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $creditSubaccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branch;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $employee;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerVendor;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $accountGroup;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $location;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;
}
