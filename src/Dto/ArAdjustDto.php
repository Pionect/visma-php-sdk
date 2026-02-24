<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ArAdjustDtoFactory testFactory()
 */
class ArAdjustDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ArAdjustDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $docType = null,
        #[MapName('customerCD')]
        public ?string $customerCd = null,
        public ?string $refNbr = null,
        public int|float|null $amountPaid = null,
        public int|float|null $cashDiscountTaken = null,
        public int|float|null $balance = null,
        #[MapName('pendingPPD')]
        public ?bool $pendingPpd = null,
        public ?bool $released = null,
        public ?bool $hold = null,
        public ?bool $voided = null,
        public ?string $ppdCrMemoRefNbr = null,
        public ?string $paymentRef = null,
        public ?string $status = null,
        public ?\Carbon\Carbon $applicationDate = null,
        public ?string $applicationPeriod = null,
        public ?string $invoiceText = null,
    ) {}
}
