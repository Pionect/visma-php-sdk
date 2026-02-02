<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Financial settings tab &gt; Financial information section &gt; Terms* &gt; The
 * credit terms used in relations with the customer. See also window CS206500.
 *
 * @method static \Pionect\VismaSdk\Factories\TermsInSalesOrderDtoFactory testFactory()
 */
class TermsInSalesOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
