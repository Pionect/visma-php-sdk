<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ApprovalDetailsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ApprovalDetailsDtoFactory factory()
 */
class ApprovalDetailsDto extends Model
{
    public function __construct(
        #[MapName('attachmentID')]
        public ?string $attachmentId = null,
        public ?string $comment = null,
    ) {}
}
