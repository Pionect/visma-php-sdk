<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DeferralCodeDtoFactory testFactory()
 */
class DeferralCodeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
