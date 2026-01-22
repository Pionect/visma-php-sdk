<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project &gt; The project with which this transaction is associated, or the code indicating that this
 * transaction is not associated with any project.
 */
class ProjectInTransactionDetailDto extends Model
{
    /** The internal identifier. */
    #[Property]
    public ?int $internalId;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
