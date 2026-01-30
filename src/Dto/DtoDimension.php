<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DtoDimensionFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DtoDimensionFactory factory()
 */
class DtoDimension extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?int $length = null,
        public ?string $description = null,
        public ?array $segments = null,
    ) {}
}
