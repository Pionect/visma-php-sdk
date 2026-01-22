<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerContractUpdateDto extends Model
{
    #[Property]
    public ?\contractIdInCustomerContractUpdateDto $contractId;

    #[Property]
    public ?\contractTemplateInCustomerContractUpdateDto $contractTemplate;

    #[Property]
    public ?\customerInCustomerContractUpdateDto $customer;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $setupDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $activationDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $massRenewal;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $renewalPoint;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $gracePeriod;

    #[Property]
    public ?\DtoValueOfString $currency;

    #[Property]
    public ?\DtoValueOfNullableOfInvoiceToType $invoiceTo;

    #[Property]
    public ?\DtoValueOfString $invoiceAccount;

    #[Property]
    public ?\DtoValueOfString $invoiceLocation;

    #[Property]
    public ?\DtoValueOfString $owner;

    #[Property]
    public ?\DtoValueOfString $salesPerson;

    #[Property]
    public ?array $details;

    #[Property]
    public ?array $attributeLines;
}
