<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A check box that you select to indicate that these work hours are invoiceable.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InvoiceableInTimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceableInTimeCardSummaryUpdateDtoFactory factory()
 */
class InvoiceableInTimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
