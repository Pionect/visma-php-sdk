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
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
