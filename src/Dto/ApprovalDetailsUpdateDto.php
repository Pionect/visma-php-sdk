<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ApprovalDetailsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ApprovalDetailsUpdateDtoFactory factory()
 */
class ApprovalDetailsUpdateDto extends Model
{
    public function __construct(
        #[MapName('attachmentID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $attachmentId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $comment = null,
    ) {}
}
