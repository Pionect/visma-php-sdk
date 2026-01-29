<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The external reference number of the inventory issue document (for example, the vendor’s reference
 * code).
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExternalReferenceInInventoryIssueUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExternalReferenceInInventoryIssueUpdateDtoFactory factory()
 */
class ExternalReferenceInInventoryIssueUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
