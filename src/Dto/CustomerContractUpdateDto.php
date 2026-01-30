<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractUpdateDtoFactory factory()
 */
class CustomerContractUpdateDto extends Model
{
    #[Property]
    public ?contractIdInCustomerContractUpdateDto $contractId;

    #[Property]
    public ?contractTemplateInCustomerContractUpdateDto $contractTemplate;

    #[Property]
    public ?customerInCustomerContractUpdateDto $customer;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $location;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $setupDate;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $activationDate;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $massRenewal;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $renewalPoint;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $gracePeriod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $invoiceTo;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $invoiceAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $invoiceLocation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $owner;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesPerson;

    #[Property]
    public ?array $details;

    #[Property]
    public ?array $attributeLines;
}
