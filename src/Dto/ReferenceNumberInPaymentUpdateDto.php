<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Ref. no &gt; Reference number for the document. Can be used when manual numbering
 * is enabled.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReferenceNumberInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReferenceNumberInPaymentUpdateDtoFactory testFactory()
 */
class ReferenceNumberInPaymentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
