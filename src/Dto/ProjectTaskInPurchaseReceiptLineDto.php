<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; Project task &gt; The project task with which the document is associated.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInPurchaseReceiptLineDtoFactory testFactory()
 */
class ProjectTaskInPurchaseReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
