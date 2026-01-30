<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\NumberingDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\NumberingDtoFactory testFactory()
 */
class NumberingDto extends Model
{
    public function __construct(
        public ?string $numberingId = null,
        public ?string $description = null,
        public ?bool $manualNumbering = null,
        public ?string $newNumberSymbol = null,
        public ?array $sequence = null,
    ) {}
}
