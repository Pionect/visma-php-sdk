<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInInventoryReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInInventoryReceiptLineDtoFactory testFactory()
 */
class ProjectInInventoryReceiptLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
