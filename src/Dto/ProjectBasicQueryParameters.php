<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ProjectBasicQueryParametersFactory testFactory()
 */
class ProjectBasicQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $status = null,
        public ?string $description = null,
        public ?string $projectId = null,
        public ?\Carbon\Carbon $startDate = null,
        public ?bool $nonProject = null,
        public ?string $projectIdDesc = null,
        public ?string $publicId = null,
        public ?string $restrictedEmployee = null,
        public ?int $restrictedUser = null,
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
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $greaterThanValue = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
