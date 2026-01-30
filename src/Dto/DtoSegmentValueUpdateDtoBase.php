<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DtoSegmentValueUpdateDtoBaseFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DtoSegmentValueUpdateDtoBaseFactory testFactory()
 */
class DtoSegmentValueUpdateDtoBase extends Model
{
    public function __construct(
        public ?string $operation = null,
        public ?string $value = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $active = null,
    ) {}
}
