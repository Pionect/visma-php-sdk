<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetQueryParametersFactory testFactory()
 */
class FixedAssetQueryParameters extends Model
{
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
