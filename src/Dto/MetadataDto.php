<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\MetadataDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\MetadataDtoFactory testFactory()
 */
class MetadataDto extends Model
{
    public function __construct(
        public ?int $totalCount = null,
        public ?int $maxPageSize = null,
    ) {}
}
