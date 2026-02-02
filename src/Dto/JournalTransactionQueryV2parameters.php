<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\JournalTransactionQueryV2parametersFactory testFactory()
 */
class JournalTransactionQueryV2parameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $periodId = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $module = null,
        public ?string $status = null,
        public ?bool $expandAttachments = null,
        public ?string $branch = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
