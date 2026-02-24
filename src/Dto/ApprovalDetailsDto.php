<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ApprovalDetailsDtoFactory testFactory()
 */
class ApprovalDetailsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ApprovalDetailsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The Approval details tab > Default document > The default document that
         * includes the payments requiring approval.
         */
        #[MapName('attachmentID')]
        public ?string $attachmentId = null,
        /**
         * The Approval details tab > Comment > The comment connected with the approval
         * of the payments.
         */
        public ?string $comment = null,
    ) {}
}
