<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PaymentLineDtoFactory testFactory()
 */
class PaymentLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $documentType = null,
        public ?string $refNbr = null,
        public int|float|null $amountPaid = null,
        public int|float|null $cashDiscountTaken = null,
        public int|float|null $balanceWriteOff = null,
        public ?WriteOffReasonCodeInPaymentLineDto $writeOffReasonCode = null,
        public ?\Carbon\Carbon $date = null,
        public ?\Carbon\Carbon $dueDate = null,
        public ?\Carbon\Carbon $cashDiscountDate = null,
        public int|float|null $balance = null,
        public int|float|null $cashDiscountBalance = null,
        public ?string $description = null,
        public ?string $currency = null,
        public ?string $postPeriod = null,
        public ?string $customerOrder = null,
        public int|float|null $crossRate = null,
    ) {}
}
