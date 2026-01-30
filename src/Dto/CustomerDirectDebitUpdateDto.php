<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerDirectDebitUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerDirectDebitUpdateDtoFactory factory()
 */
class CustomerDirectDebitUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?string $id;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $mandateId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $mandateDescription;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $dateOfSignature;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $isDefault;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $oneTime;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $bic;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $iban;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $lastCollectionDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $maxAmount;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branch;
}
