<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DtoDimensionFactory testFactory()
 */
class DtoDimension extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?int $length = null,
        public ?string $description = null,
        public ?array $segments = null,
    ) {}
}
