<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Project* &gt; The identifier and description of the project with which this
 * document is associated, or the code indicating that this document is not associated with any
 * project; the non-project code is specified in the Project accounting preferences (PM101000) window.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInCustomerDebitNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInCustomerDebitNoteDtoFactory factory()
 */
class ProjectInCustomerDebitNoteDto extends Model
{
    /** The internal identifier. */
    #[Property]
    public ?int $internalId;

    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
