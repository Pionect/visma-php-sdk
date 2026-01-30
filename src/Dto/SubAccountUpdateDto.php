<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubAccountUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubAccountUpdateDtoFactory testFactory()
 */
class SubAccountUpdateDto extends Model
{
    public function __construct(
        public ?SubaccountNumberInSubAccountUpdateDto $subaccountNumber = null,
        public ?SubaccountIdInSubAccountUpdateDto $subaccountId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $active = null,
    ) {}
}
