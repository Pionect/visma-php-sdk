<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TimeCardUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TimeCardUpdateDtoFactory factory()
 */
class TimeCardUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $refNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $employee = null,
        public ?array $summary = null,
        public ?array $materials = null,
    ) {}
}
