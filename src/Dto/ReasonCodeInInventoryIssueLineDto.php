<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reason code &gt; The reason code associated with the transferred goods.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReasonCodeInInventoryIssueLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReasonCodeInInventoryIssueLineDtoFactory factory()
 */
class ReasonCodeInInventoryIssueLineDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
