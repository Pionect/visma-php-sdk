<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PrebookingUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PrebookingUpdateDtoFactory testFactory()
 */
class PrebookingUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountNumber = null,
        public ?array $subaccount = null,
    ) {}
}
