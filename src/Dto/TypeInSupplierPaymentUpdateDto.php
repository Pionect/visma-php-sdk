<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reference number for the document. Can be used when manual numbering is enabled.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TypeInSupplierPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TypeInSupplierPaymentUpdateDtoFactory testFactory()
 */
class TypeInSupplierPaymentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
