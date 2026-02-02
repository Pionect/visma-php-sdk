<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TaskQueryParametersFactory testFactory()
 */
class TaskQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $projectId = null,
        public ?string $publicId = null,
        public ?int $projectInternalId = null,
        public ?string $description = null,
        public ?string $taskCd = null,
        public ?string $taskCdDesc = null,
        public ?string $status = null,
        public ?bool $expandAttribute = null,
        public ?bool $visibleInAp = null,
        public ?bool $visibleInAr = null,
        public ?bool $visibleInCa = null,
        public ?bool $visibleInCr = null,
        public ?bool $visibleInEa = null,
        public ?bool $visibleInGl = null,
        public ?bool $visibleInIn = null,
        public ?bool $visibleInPo = null,
        public ?bool $visibleInSo = null,
        public ?bool $visibleInTa = null,
        public ?string $restrictedEmployee = null,
        public ?int $restrictedUser = null,
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
