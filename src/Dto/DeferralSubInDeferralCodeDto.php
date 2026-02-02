<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Deferral sub &gt; The corresponding subaccount.
 *
 * @method static \Pionect\VismaSdk\Factories\DeferralSubInDeferralCodeDtoFactory testFactory()
 */
class DeferralSubInDeferralCodeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
