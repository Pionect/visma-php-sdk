<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project &gt; The project with which this purchase order line is associated.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInPurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInPurchaseOrderLineDtoFactory factory()
 */
class ProjectInPurchaseOrderLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
