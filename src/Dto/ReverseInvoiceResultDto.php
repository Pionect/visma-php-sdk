<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReverseInvoiceResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReverseInvoiceResultDtoFactory factory()
 */
class ReverseInvoiceResultDto extends Model
{
    public function __construct(
        public ?string $refNbr = null,
        public ?string $docType = null,
        public ?string $actionId = null,
        public ?string $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
