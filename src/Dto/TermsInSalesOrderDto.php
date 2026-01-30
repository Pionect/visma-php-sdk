<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Financial settings tab &gt; Financial information section &gt; Terms* &gt; The
 * credit terms used in relations with the customer. See also window CS206500.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TermsInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TermsInSalesOrderDtoFactory factory()
 */
class TermsInSalesOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
