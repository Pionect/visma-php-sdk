<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Deferral account &gt; The account used to hold the deferred amount until it is fully recognised.
 *
 * @method static \Pionect\VismaSdk\Factories\DeferralAccountInDeferralCodeDtoFactory testFactory()
 */
class DeferralAccountInDeferralCodeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
