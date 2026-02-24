<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * SupplierInvoiceCommentUpdateDto
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceCommentUpdateDtoFactory testFactory()
 */
class SupplierInvoiceCommentUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierInvoiceCommentUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $userEmail = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $commentText = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $commentDateTime = null,
    ) {}
}
