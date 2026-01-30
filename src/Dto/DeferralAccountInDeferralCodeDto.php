<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Deferral account &gt; The account used to hold the deferred amount until it is fully recognised.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DeferralAccountInDeferralCodeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DeferralAccountInDeferralCodeDtoFactory factory()
 */
class DeferralAccountInDeferralCodeDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
