<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Customer &gt; The customer that has ordered the goods or services.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInSalesOrderBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInSalesOrderBasicDtoFactory factory()
 */
class CustomerInSalesOrderBasicDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
