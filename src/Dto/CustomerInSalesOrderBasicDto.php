<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Customer &gt; The customer that has ordered the goods or services.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInSalesOrderBasicDtoFactory testFactory()
 */
class CustomerInSalesOrderBasicDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
