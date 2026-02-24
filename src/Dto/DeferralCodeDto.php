<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\DeferralCodeCodeTypeEnum;
use Pionect\VismaSdk\Enums\DeferralCodeRecognitionMethodEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DeferralCodeDtoFactory testFactory()
 */
class DeferralCodeDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DeferralCodeDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandatory field: Deferral code* > 	The unique code for the deferral type. */
        public ?string $deferralCode = null,
        /** Description > The description of the deferral code. */
        public ?string $description = null,
        /**
         * Deferred revenue from item > When this check box is selected, the deferred
         * revenue of the code will be retrieved from the connected item.
         */
        public ?bool $deferredRevenueFromItem = null,
        /**
         * Recognition method > The method used to distribute the document amount over
         * the periods.
         */
        public ?DeferralCodeRecognitionMethodEnum $recognitionMethod = null,
        /** Code type > The type of the deferral code. */
        public ?DeferralCodeCodeTypeEnum $codeType = null,
        public ?DeferralAccountInDeferralCodeDto $deferralAccount = null,
        public ?DeferralSubInDeferralCodeDto $deferralSub = null,
        public ?string $errorInfo = null,
    ) {}
}
