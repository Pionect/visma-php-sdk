<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReplenishmentClassIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReplenishmentClassIdDescriptionDtoFactory factory()
 */
class ReplenishmentClassIdDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
