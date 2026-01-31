<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitAssemblyLinkInsertDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitAssemblyLinkInsertDtoFactory testFactory()
 */
class KitAssemblyLinkInsertDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $orderType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $orderNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $orderLineNumber = null,
    ) {}
}
