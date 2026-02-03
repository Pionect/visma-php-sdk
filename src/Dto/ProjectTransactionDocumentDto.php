<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ProjectTransactionDocumentDtoFactory testFactory()
 */
class ProjectTransactionDocumentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $refNbr = null,
        public ?string $description = null,
        public ?string $origDocNbr = null,
        public ?string $status = null,
        public ?string $module = null,
        public ?string $origDocType = null,
        public ?string $note = null,
        public ?string $timeStamp = null,
        /** @var ProjectTransactionLineDto[]|null */
        public ?array $lines = null,
        public ?string $errorInfo = null,
    ) {}
}
