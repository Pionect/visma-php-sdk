<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseLocationUpdateDtoFactory testFactory()
 */
class WarehouseLocationUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $active = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $inclQtyAvail = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $isCosted = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $salesValid = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $receiptsValid = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $transfersValid = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $assemblyValid = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $pickPriority = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $primaryItemValid = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $primaryItemId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $primaryItemClassId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectTaskId = null,
    ) {}
}
