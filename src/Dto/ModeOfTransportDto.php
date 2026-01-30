<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ModeOfTransportDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ModeOfTransportDtoFactory testFactory()
 */
class ModeOfTransportDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $description = null,
    ) {}
}
