<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Sales Order in Sales Order Controller. Used to pass data to server for
 * creating or updating an order
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderUpdateDtoFactory factory()
 */
class SalesOrderUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $project;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $printDescriptionOnInvoice;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $printNoteOnExternalDocuments;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $printNoteOnInternalDocuments;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?SalesOrderContactUpdateDto $soBillingContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?SalesOrderAddressUpdateDto $soBillingAddress;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerVatzone;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $invoiceSeparately;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $terms;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesPerson;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $owner;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $origOrderType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $origOrderNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?SalesOrderContactUpdateDto $soShippingContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?SalesOrderAddressUpdateDto $soShippingAddress;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $schedShipment;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $shipSeparately;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $shipComplete;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $cancelBy;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $canceled;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $preferredWarehouse;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $shipVia;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $fobPoint;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $priority;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $shippingTerms;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $shippingZone;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $residentialDelivery;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $saturdayDelivery;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $insurance;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $transactionType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $paymentMethod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $cashAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $paymentRef;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $isRotRutDeductible;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $emailed;

    #[Property]
    public ?RotRutUpdateDto $rotRutDetails;

    #[Property]
    public ?array $lines;

    #[Property]
    public ?orderTypeInSalesOrderUpdateDto $orderType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $orderNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $hold;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $date;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $requestOn;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerOrder;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerRefNo;

    #[Property]
    public ?customerInSalesOrderUpdateDto $customer;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $location;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $contactId;

    #[Property]
    public ?glnInSalesOrderUpdateDto $gln;

    #[Property]
    public ?vatRegistrationIdInSalesOrderUpdateDto $vatRegistrationId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $recalculateShipment;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branchNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $overrideNumberSeries;
}
