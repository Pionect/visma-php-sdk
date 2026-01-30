<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ItemClassDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ItemClassDtoFactory testFactory()
 */
class ItemClassDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?array $attributes = null,
        public ?string $id = null,
        public ?string $description = null,
        public ?string $errorInfo = null,
    ) {}
}
