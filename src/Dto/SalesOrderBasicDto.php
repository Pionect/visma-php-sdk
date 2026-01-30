<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a SOOrder in SOOrderController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderBasicDtoFactory testFactory()
 */
class SalesOrderBasicDto extends Model
{
    public function __construct(
        public ?array $lines = null,
        public ?string $orderType = null,
        public ?string $orderNo = null,
        public ?string $status = null,
        public ?bool $hold = null,
        public ?\Carbon\Carbon $date = null,
        public ?\Carbon\Carbon $requestOn = null,
        public ?string $customerOrder = null,
        public ?string $customerRefNo = null,
        public ?CustomerInSalesOrderBasicDto $customer = null,
        public ?int $contactId = null,
        public ?LocationInSalesOrderBasicDto $location = null,
        public ?string $currency = null,
        public ?string $description = null,
        public int|float|null $orderTotal = null,
        public int|float|null $orderTotalInBaseCurrency = null,
        public int|float|null $vatTaxableTotal = null,
        public int|float|null $vatTaxableTotalInBaseCurrency = null,
        public int|float|null $vatExemptTotal = null,
        public int|float|null $vatExemptTotalInBaseCurrency = null,
        public int|float|null $taxTotal = null,
        public int|float|null $taxTotalInBaseCurrency = null,
        public int|float|null $exchangeRate = null,
        public int|float|null $discountTotal = null,
        public int|float|null $discountTotalInBaseCurrency = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?BranchNumberInSalesOrderBasicDto $branchNumber = null,
        public ?string $note = null,
        public ?array $attachments = null,
        public ?string $errorInfo = null,
    ) {}
}
