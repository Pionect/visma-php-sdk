<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DeferralCodeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DeferralCodeDtoFactory testFactory()
 */
class DeferralCodeDto extends Model
{
    public function __construct(
        public ?string $deferralCode = null,
        public ?string $description = null,
        public ?bool $deferredRevenueFromItem = null,
        public ?string $recognitionMethod = null,
        public ?string $codeType = null,
        public ?DeferralAccountInDeferralCodeDto $deferralAccount = null,
        public ?DeferralSubInDeferralCodeDto $deferralSub = null,
        public ?string $errorInfo = null,
    ) {}
}
