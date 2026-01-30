<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExternalCodeNumberDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExternalCodeNumberDescriptionDtoFactory testFactory()
 */
class ExternalCodeNumberDescriptionDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
