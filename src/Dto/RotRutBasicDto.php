<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\RotRutBasicDtoFactory testFactory()
 */
class RotRutBasicDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $distributedAutomaticaly = null,
        public ?string $type = null,
        public ?string $appartment = null,
        public ?string $estate = null,
        public ?string $organizationNbr = null,
        public ?array $distribution = null,
    ) {}
}
