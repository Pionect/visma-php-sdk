<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A check box that you select to indicate that these work hours are invoiceable.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InvoiceableInTimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceableInTimeCardSummaryUpdateDtoFactory testFactory()
 */
class InvoiceableInTimeCardSummaryUpdateDto extends Model
{
    public function __construct(
        public ?bool $value = null,
    ) {}
}
