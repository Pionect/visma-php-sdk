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
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderBasicUpdateDtoFactory factory()
 */
class SalesOrderBasicUpdateDto extends Model
{
    #[Property]
    public ?array $lines;

    #[Property]
    public ?orderTypeInSalesOrderBasicUpdateDto $orderType;

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
    public ?customerInSalesOrderBasicUpdateDto $customer;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $location;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $contactId;

    #[Property]
    public ?glnInSalesOrderBasicUpdateDto $gln;

    #[Property]
    public ?vatRegistrationIdInSalesOrderBasicUpdateDto $vatRegistrationId;

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
