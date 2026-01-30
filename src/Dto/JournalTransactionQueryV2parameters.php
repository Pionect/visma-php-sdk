<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\JournalTransactionQueryV2parametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\JournalTransactionQueryV2parametersFactory testFactory()
 */
class JournalTransactionQueryV2parameters extends Model
{
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
