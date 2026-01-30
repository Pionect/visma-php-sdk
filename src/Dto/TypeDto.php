<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TypeDtoFactory testFactory()
 */
class TypeDto extends Model
{
    public function __construct(
        #[MapName('assetTypeID')]
        public ?string $assetTypeId = null,
        public ?string $description = null,
    ) {}
}
