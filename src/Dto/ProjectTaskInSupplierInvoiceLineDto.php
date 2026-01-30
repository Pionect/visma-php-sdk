<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; Project task &gt; The project task associated with the invoice line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInSupplierInvoiceLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInSupplierInvoiceLineDtoFactory factory()
 */
class ProjectTaskInSupplierInvoiceLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
