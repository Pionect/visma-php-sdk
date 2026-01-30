<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTransactionDocumentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTransactionDocumentDtoFactory testFactory()
 */
class ProjectTransactionDocumentDto extends Model
{
    public function __construct(
        public ?string $refNbr = null,
        public ?string $description = null,
        public ?string $origDocNbr = null,
        public ?string $status = null,
        public ?string $module = null,
        public ?string $origDocType = null,
        public ?string $note = null,
        public ?string $timeStamp = null,
        public ?array $lines = null,
        public ?string $errorInfo = null,
    ) {}
}
