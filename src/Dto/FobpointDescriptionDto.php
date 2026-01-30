<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FobpointDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FobpointDescriptionDtoFactory factory()
 */
class FobpointDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
