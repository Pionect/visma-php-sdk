<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

class SupplierPaymentUpdateDto extends Model
{
    #[Property]
    public ?typeInSupplierPaymentUpdateDto $type;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $referenceNumber;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?bool $hold;

    #[Property]
    #[DateTime]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $applicationDate;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $applicationPeriod;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $paymentRef;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $supplier;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $location;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $paymentMethod;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $cashAccount;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $currency;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?float $paymentAmount;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $branch;

    #[Property]
    public ?array $paymentLines;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?bool $overrideNumberSeries;
}
