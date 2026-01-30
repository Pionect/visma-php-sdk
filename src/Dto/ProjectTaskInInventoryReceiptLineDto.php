<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project Task
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInInventoryReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInInventoryReceiptLineDtoFactory factory()
 */
class ProjectTaskInInventoryReceiptLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
