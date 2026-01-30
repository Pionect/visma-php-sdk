<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditNoteLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditNoteLineUpdateDtoFactory factory()
 */
class CreditNoteLineUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $discountCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $taskId;

    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inventoryNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $quantity;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $unitPriceInCurrency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $manualAmountInCurrency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $accountNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $vatCodeId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discountPercent;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discountAmountInCurrency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $manualDiscount;

    #[Property]
    public ?array $subaccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesperson;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $deferralSchedule;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $deferralCode;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $termStartDate;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $termEndDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branchNumber;
}
