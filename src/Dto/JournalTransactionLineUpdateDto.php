<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\JournalTransactionLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\JournalTransactionLineUpdateDtoFactory factory()
 */
class JournalTransactionLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $accountNumber;

    #[Property]
    public ?array $subaccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $project;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectTask;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $referenceNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $transactionDescription;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $debitAmountInCurrency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $creditAmountInCurrency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $vatCodeId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $vatId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branch;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $quantity;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;
}
