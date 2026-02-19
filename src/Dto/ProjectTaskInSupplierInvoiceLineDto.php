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
        /** The internal identifier. */
        public ?int $internalId = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
