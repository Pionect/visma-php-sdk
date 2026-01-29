<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
