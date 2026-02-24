<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The table &gt; Mandatory field: Branch* &gt; The branch that purchases the line item or
 * service.
 * Note: The field type has been changed from string to BranchNumberDto, please consider
 * doing changes accordingly.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInSupplierInvoiceLineDtoFactory testFactory()
 */
class BranchNumberInSupplierInvoiceLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\BranchNumberInSupplierInvoiceLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
