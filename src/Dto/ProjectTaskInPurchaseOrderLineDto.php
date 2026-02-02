<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Project task &gt; The project task with which this purchase order is associated.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInPurchaseOrderLineDtoFactory testFactory()
 */
class ProjectTaskInPurchaseOrderLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
