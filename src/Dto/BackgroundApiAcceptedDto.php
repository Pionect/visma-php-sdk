<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BackgroundApiAcceptedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BackgroundApiAcceptedDtoFactory testFactory()
 */
class BackgroundApiAcceptedDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $stateLocation = null,
    ) {}
}
