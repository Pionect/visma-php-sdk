<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerOverdueChargeLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerOverdueChargeLineDtoFactory factory()
 */
class CustomerOverdueChargeLineDto extends Model
{
    public function __construct(
        public ?array $attachments = null,
        public ?int $lineNumber = null,
        public ?string $inventoryNumber = null,
        public ?string $description = null,
        public int|float|null $quantity = null,
        public int|float|null $unitPrice = null,
        public int|float|null $unitPriceInCurrency = null,
        public int|float|null $manualAmount = null,
        public int|float|null $manualAmountInCurrency = null,
        public int|float|null $amount = null,
        public int|float|null $cost = null,
        public int|float|null $amountInCurrency = null,
        public ?AccountInCustomerOverdueChargeLineDto $account = null,
        public ?VatCodeInCustomerOverdueChargeLineDto $vatCode = null,
        public ?string $uom = null,
        public int|float|null $discountPercent = null,
        public int|float|null $discountAmount = null,
        public int|float|null $discountAmountInCurrency = null,
        public ?bool $manualDiscount = null,
        public ?SubaccountInCustomerOverdueChargeLineDto $subaccount = null,
        public ?string $salesperson = null,
        public ?SellerInCustomerOverdueChargeLineDto $seller = null,
        public ?int $deferralSchedule = null,
        public ?string $deferralCode = null,
        public ?string $discountCode = null,
        public ?string $note = null,
        public ?BranchNumberInCustomerOverdueChargeLineDto $branchNumber = null,
        public ?string $externalLink = null,
    ) {}
}
