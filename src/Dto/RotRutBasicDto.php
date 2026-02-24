<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\WorkTypeRutRotTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\RotRutBasicDtoFactory testFactory()
 */
class RotRutBasicDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\RotRutBasicDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $distributedAutomaticaly = null,
        public ?WorkTypeRutRotTypeEnum $type = null,
        public ?string $appartment = null,
        public ?string $estate = null,
        public ?string $organizationNbr = null,
        /** @var RotRutDistributionDto[]|null */
        public ?array $distribution = null,
    ) {}
}
