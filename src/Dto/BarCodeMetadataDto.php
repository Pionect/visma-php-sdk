<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BarCodeMetadataDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BarCodeMetadataDtoFactory testFactory()
 */
class BarCodeMetadataDto extends Model
{
    public function __construct(
        public ?int $totalCount = null,
    ) {}
}
