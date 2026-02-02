<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Project &gt; The project with which this purchase order line is associated.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInPurchaseOrderLineDtoFactory testFactory()
 */
class ProjectInPurchaseOrderLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
