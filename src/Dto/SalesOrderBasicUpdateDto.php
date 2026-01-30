<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
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
    public function __construct(
        public ?array $lines = null,
        public ?OrderTypeInSalesOrderBasicUpdateDto $orderType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $orderNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $requestOn = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerOrder = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerRefNo = null,
        public ?CustomerInSalesOrderBasicUpdateDto $customer = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $contactId = null,
        public ?GlnInSalesOrderBasicUpdateDto $gln = null,
        public ?VatRegistrationIdInSalesOrderBasicUpdateDto $vatRegistrationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $recalculateShipment = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
    ) {}
}
