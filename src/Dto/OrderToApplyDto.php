<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents an OrderToApply in Payments
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OrderToApplyDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OrderToApplyDtoFactory factory()
 */
class OrderToApplyDto extends Model
{
    public function __construct(
        public ?string $orderType = null,
        public ?string $orderNo = null,
        public ?string $status = null,
        public int|float|null $appliedToOrder = null,
        public int|float|null $transferredToInvoice = null,
        public ?\Carbon\Carbon $date = null,
        public ?\Carbon\Carbon $dueDate = null,
        public ?\Carbon\Carbon $cashDiscountDate = null,
        public int|float|null $balance = null,
        public ?string $description = null,
        public int|float|null $orderTotal = null,
        public ?string $currency = null,
        public ?string $invoiceNbr = null,
        public ?\Carbon\Carbon $invoiceDate = null,
    ) {}
}
