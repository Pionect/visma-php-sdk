<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentQueryParametersFactory testFactory()
 */
class PaymentQueryParameters extends Model
{
    public function __construct(
        public ?string $paymentNbr = null,
        public ?string $paymentType = null,
        public ?string $customer = null,
        public ?string $greaterThanValue = null,
        public ?string $invoiceRefNbr = null,
        public ?string $status = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $branch = null,
        public ?\Carbon\Carbon $docDate = null,
        public ?string $docDateCondition = null,
        public ?string $financialPeriod = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
