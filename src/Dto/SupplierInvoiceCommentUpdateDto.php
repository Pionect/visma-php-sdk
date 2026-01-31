<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * SupplierInvoiceCommentUpdateDto
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceCommentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceCommentUpdateDtoFactory testFactory()
 */
class SupplierInvoiceCommentUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $userEmail = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $commentText = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $commentDateTime = null,
    ) {}
}
