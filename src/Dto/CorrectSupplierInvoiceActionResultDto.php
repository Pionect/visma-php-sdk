<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CorrectSupplierInvoiceActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CorrectSupplierInvoiceActionResultDtoFactory factory()
 */
class CorrectSupplierInvoiceActionResultDto extends Model
{
    public function __construct(
        public ?string $refNbr = null,
        public ?string $errorMessage = null,
        public ?string $actionId = null,
        public ?string $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
