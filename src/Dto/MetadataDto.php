<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\MetadataDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\MetadataDtoFactory factory()
 */
class MetadataDto extends Model
{
    #[Property]
    public ?int $totalCount;

    #[Property]
    public ?int $maxPageSize;
}
