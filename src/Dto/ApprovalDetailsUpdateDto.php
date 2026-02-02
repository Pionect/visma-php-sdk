<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ApprovalDetailsUpdateDtoFactory testFactory()
 */
class ApprovalDetailsUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('attachmentID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $attachmentId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $comment = null,
    ) {}
}
