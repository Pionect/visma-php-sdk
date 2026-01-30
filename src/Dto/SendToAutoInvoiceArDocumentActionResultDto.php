<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SendToAutoInvoiceArDocumentActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SendToAutoInvoiceArDocumentActionResultDtoFactory factory()
 */
class SendToAutoInvoiceArDocumentActionResultDto extends Model
{
    public function __construct(
        public ?string $refNbr = null,
        public ?string $documentType = null,
        public ?string $actionId = null,
        public ?string $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
