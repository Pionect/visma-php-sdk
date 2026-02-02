<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FixedAssetQueryParametersFactory testFactory()
 */
class FixedAssetQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('assetID')]
        public ?string $assetId = null,
        #[MapName('classID')]
        public ?string $classId = null,
        public ?string $status = null,
        public ?\Carbon\Carbon $fromDate = null,
        public ?\Carbon\Carbon $toDate = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?bool $expandAccounts = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
