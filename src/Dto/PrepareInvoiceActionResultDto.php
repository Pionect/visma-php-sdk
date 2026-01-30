<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PrepareInvoiceActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PrepareInvoiceActionResultDtoFactory testFactory()
 */
class PrepareInvoiceActionResultDto extends Model
{
    public function __construct(
        public ?string $referenceNumber = null,
        public ?CustomerInvoiceDto $customerInvoiceDto = null,
        public ?string $actionId = null,
        public ?string $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
