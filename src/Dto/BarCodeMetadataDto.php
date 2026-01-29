<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BarCodeMetadataDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BarCodeMetadataDtoFactory factory()
 */
class BarCodeMetadataDto extends Model
{
    #[Property]
    public ?int $totalCount;
}
