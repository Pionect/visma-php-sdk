<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\AttachmentDtoFactory testFactory()
 */
class AttachmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $name = null,
        public ?string $id = null,
        public ?int $revision = null,
    ) {}
}
