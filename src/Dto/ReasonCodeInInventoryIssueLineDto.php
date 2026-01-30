<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reason code &gt; The reason code associated with the transferred goods.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReasonCodeInInventoryIssueLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReasonCodeInInventoryIssueLineDtoFactory testFactory()
 */
class ReasonCodeInInventoryIssueLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
