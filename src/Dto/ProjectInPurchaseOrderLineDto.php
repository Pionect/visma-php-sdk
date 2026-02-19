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
        /** The internal identifier. */
        public ?int $internalId = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
