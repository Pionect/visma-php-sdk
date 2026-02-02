<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentDtoFactory testFactory()
 */
class SupplierPaymentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $documentType = null,
        public ?string $refNbr = null,
        public ?string $status = null,
        public ?bool $hold = null,
        public ?\Carbon\Carbon $applicationDate = null,
        public ?string $applicationPeriod = null,
        public ?string $paymentRef = null,
        public ?SupplierInSupplierPaymentDto $supplier = null,
        public ?LocationInSupplierPaymentDto $location = null,
        public ?string $paymentMethod = null,
        public ?string $cashAccount = null,
        public ?CurrencyInSupplierPaymentDto $currency = null,
        public ?string $description = null,
        public int|float|null $paymentAmount = null,
        public int|float|null $financeCharges = null,
        public int|float|null $balance = null,
        public int|float|null $unappliedBalance = null,
        public int|float|null $appliedAmount = null,
        public ?bool $released = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $branch = null,
        public ?array $paymentLines = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
