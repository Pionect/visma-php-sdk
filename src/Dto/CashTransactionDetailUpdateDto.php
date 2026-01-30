<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashTransactionDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashTransactionDetailUpdateDtoFactory factory()
 */
class CashTransactionDetailUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branchNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inventoryNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $quantity;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $price;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $amount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $offsetAccount;

    #[Property]
    public ?array $offsetSubaccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $vatCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $notInvoiceable;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $project;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectTask;
}
