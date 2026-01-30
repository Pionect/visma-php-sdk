<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesInvoiceContactUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesInvoiceContactUpdateDtoFactory factory()
 */
class SalesInvoiceContactUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $name = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $attention = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $email = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $phone1 = null,
    ) {}
}
