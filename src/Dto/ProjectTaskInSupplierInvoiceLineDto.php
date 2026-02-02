<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The table &gt; Project task &gt; The project task associated with the invoice line.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInSupplierInvoiceLineDtoFactory testFactory()
 */
class ProjectTaskInSupplierInvoiceLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
