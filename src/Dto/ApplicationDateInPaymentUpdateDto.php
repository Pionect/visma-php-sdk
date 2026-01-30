<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Date* &gt; The date when a payment is applied to a document
 * (invoice or note). The current business date for unapplied or partially applied payments and the
 * latest application date for the closed payment.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ApplicationDateInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ApplicationDateInPaymentUpdateDtoFactory testFactory()
 */
class ApplicationDateInPaymentUpdateDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $value = null,
    ) {}
}
