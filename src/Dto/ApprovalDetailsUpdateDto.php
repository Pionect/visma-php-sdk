<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ApprovalDetailsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ApprovalDetailsUpdateDtoFactory factory()
 */
class ApprovalDetailsUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $attachmentId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $comment;
}
