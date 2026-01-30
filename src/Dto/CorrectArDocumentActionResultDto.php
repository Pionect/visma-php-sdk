<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CorrectArDocumentActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CorrectArDocumentActionResultDtoFactory factory()
 */
class CorrectArDocumentActionResultDto extends Model
{
    public function __construct(
        public ?string $refNbr = null,
        public ?string $documentType = null,
        public ?string $actionId = null,
        public ?string $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
