<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContactIdNameDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContactIdNameDtoFactory factory()
 */
class ContactIdNameDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
