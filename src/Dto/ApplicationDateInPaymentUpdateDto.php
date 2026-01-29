<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Date* &gt; The date when a payment is applied to a document
 * (invoice or note). The current business date for unapplied or partially applied payments and the
 * latest application date for the closed payment.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ApplicationDateInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ApplicationDateInPaymentUpdateDtoFactory factory()
 */
class ApplicationDateInPaymentUpdateDto extends Model
{
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $value;
}
