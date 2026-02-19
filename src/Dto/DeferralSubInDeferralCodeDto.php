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
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
