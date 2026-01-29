<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The branch to which the default offset account belongs.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultOffsetAccountBranchInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultOffsetAccountBranchInEntryTypeDtoFactory factory()
 */
class DefaultOffsetAccountBranchInEntryTypeDto extends Model
{
    /** Click the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
