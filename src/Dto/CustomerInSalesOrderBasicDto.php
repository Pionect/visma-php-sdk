<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    #[Property]
    public ?int $internalId;

    /** The identifier of the particular destination of the selected type. */
    #[Property]
    public ?string $number;

    /** The name of the particular destination of the selected type. */
    #[Property]
    public ?string $name;
}
