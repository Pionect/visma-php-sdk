<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ApprovalDetailsDtoFactory testFactory()
 */
class ApprovalDetailsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('attachmentID')]
        public ?string $attachmentId = null,
        public ?string $comment = null,
    ) {}
}
