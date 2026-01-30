<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentUpdateDtoFactory factory()
 */
class SupplierPaymentUpdateDto extends Model
{
    #[Property]
    public ?typeInSupplierPaymentUpdateDto $type;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $referenceNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $hold;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $applicationDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $applicationPeriod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $paymentRef;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $supplier;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $location;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $paymentMethod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $cashAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $paymentAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branch;

    #[Property]
    public ?array $paymentLines;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $overrideNumberSeries;
}
