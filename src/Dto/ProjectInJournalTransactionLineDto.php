<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; Project &gt; The project with which this batch is associated, or the code indicating
 * that this batch is not associated with any project.
 */
class ProjectInJournalTransactionLineDto extends Model
{
    /** The internal identifier. */
    #[Property]
    public ?int $internalId;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
