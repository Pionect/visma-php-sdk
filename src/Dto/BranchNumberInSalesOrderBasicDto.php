<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Document details tab &gt; Branch* &gt; The branch of the company.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInSalesOrderBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInSalesOrderBasicDtoFactory factory()
 */
class BranchNumberInSalesOrderBasicDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
