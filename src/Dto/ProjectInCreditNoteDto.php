<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Project* &gt; The identifier and description of the project with which this
 * document is associated, or the code indicating that this document is not associated with any
 * project; the non-project code is specified in the Project accounting preferences (PM101000) window.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInCreditNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInCreditNoteDtoFactory testFactory()
 */
class ProjectInCreditNoteDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
