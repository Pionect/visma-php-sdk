<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project task &gt; The project task with which this purchase order is associated.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInPurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInPurchaseOrderLineDtoFactory testFactory()
 */
class ProjectTaskInPurchaseOrderLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
