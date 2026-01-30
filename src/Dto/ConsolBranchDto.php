<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ConsolBranchDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ConsolBranchDtoFactory testFactory()
 */
class ConsolBranchDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
