<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Project
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInInventoryReceiptLineDtoFactory testFactory()
 */
class ProjectInInventoryReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
