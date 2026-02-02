<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FixedAssetClassQueryParametersFactory testFactory()
 */
class FixedAssetClassQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('classID')]
        public ?string $classId = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
