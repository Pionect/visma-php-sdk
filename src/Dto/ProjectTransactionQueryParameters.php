<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTransactionQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTransactionQueryParametersFactory factory()
 */
class ProjectTransactionQueryParameters extends Model
{
    public function __construct(
        public ?string $module = null,
        public ?string $status = null,
        public ?string $project = null,
        public ?string $projectTask = null,
        public ?bool $billable = null,
        public ?string $branch = null,
        public ?\Carbon\Carbon $date = null,
        public ?string $fromPeriod = null,
        public ?string $toPeriod = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?bool $expandNote = null,
        public ?string $greaterThanValue = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
