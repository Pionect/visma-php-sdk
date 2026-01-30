<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Deferral sub &gt; The corresponding subaccount.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DeferralSubInDeferralCodeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DeferralSubInDeferralCodeDtoFactory factory()
 */
class DeferralSubInDeferralCodeDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
