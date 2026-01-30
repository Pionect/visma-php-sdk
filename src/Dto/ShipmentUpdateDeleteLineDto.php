<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentUpdateDeleteLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentUpdateDeleteLineDtoFactory testFactory()
 */
class ShipmentUpdateDeleteLineDto extends Model
{
    public function __construct(
        #[MapName('deleteSOLine'), WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $deleteSoline = null,
    ) {}
}
