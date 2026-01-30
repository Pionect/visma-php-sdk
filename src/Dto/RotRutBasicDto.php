<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RotRutBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RotRutBasicDtoFactory factory()
 */
class RotRutBasicDto extends Model
{
    public function __construct(
        public ?bool $distributedAutomaticaly = null,
        public ?string $type = null,
        public ?string $appartment = null,
        public ?string $estate = null,
        public ?string $organizationNbr = null,
        public ?array $distribution = null,
    ) {}
}
