<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RotRutUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RotRutUpdateDtoFactory factory()
 */
class RotRutUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $distributedAutomaticaly = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $type = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $appartment = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $estate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $organizationNbr = null,
        public ?array $distribution = null,
    ) {}
}
