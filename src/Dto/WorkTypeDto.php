<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\WorkTypeDtoFactory testFactory()
 */
class WorkTypeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $rutRotType = null,
        public ?string $description = null,
        public ?string $xmlTag = null,
    ) {}
}
