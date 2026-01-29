<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Intrastat section &gt; Transaction type
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TransactionTypeInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TransactionTypeInSalesOrderDtoFactory factory()
 */
class TransactionTypeInSalesOrderDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?int $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
