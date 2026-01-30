<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectQueryParametersFactory testFactory()
 */
class ProjectQueryParameters extends Model
{
    public function __construct(
        public ?string $status = null,
        public ?bool $systemTemplate = null,
        #[MapName('visibleInAP')]
        public ?bool $visibleInAp = null,
        public ?\Carbon\Carbon $startDate = null,
        public ?bool $expandAttribute = null,
        public ?string $attributes = null,
        public ?string $taskStatus = null,
        public ?bool $taskVisibleInAp = null,
        public ?bool $taskVisibleInAr = null,
        public ?bool $taskVisibleInCa = null,
        public ?bool $taskVisibleInCr = null,
        public ?bool $taskVisibleInEa = null,
        public ?bool $taskVisibleInGl = null,
        public ?bool $taskVisibleInIn = null,
        public ?bool $taskVisibleInPo = null,
        public ?bool $taskVisibleInSo = null,
        public ?bool $taskVisibleInTa = null,
        public ?bool $nonProject = null,
        public ?string $publicId = null,
        public ?string $restrictedEmployee = null,
        public ?int $restrictedUser = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?string $branch = null,
        public ?bool $onHold = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
