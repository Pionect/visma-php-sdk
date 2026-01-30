<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The branch to which the default offset account belongs.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultOffsetAccountBranchInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultOffsetAccountBranchInEntryTypeDtoFactory testFactory()
 */
class DefaultOffsetAccountBranchInEntryTypeDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
