<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Default offset account branch &gt; The branch to which the overriding offset account belongs.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OffsetAccountBranchInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetAccountBranchInEntryTypeDtoFactory testFactory()
 */
class OffsetAccountBranchInEntryTypeDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
