<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttachmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttachmentDtoFactory factory()
 */
class AttachmentDto extends Model
{
    public function __construct(
        public ?string $name = null,
        public ?string $id = null,
        public ?int $revision = null,
    ) {}
}
