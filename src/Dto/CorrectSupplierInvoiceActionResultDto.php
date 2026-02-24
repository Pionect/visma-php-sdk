<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ReleaseCashTransactionActionResultActionResultEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CorrectSupplierInvoiceActionResultDtoFactory testFactory()
 */
class CorrectSupplierInvoiceActionResultDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CorrectSupplierInvoiceActionResultDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $refNbr = null,
        public ?string $errorMessage = null,
        public ?string $actionId = null,
        public ?ReleaseCashTransactionActionResultActionResultEnum $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
