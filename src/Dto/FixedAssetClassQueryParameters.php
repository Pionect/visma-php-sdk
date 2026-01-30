<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetClassQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetClassQueryParametersFactory factory()
 */
class FixedAssetClassQueryParameters extends Model
{
    public function __construct(
        #[MapName('classID')]
        public ?string $classId = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
