<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Project* &gt; The identifier and description of the project with which this
 * document is associated, or the code indicating that this document is not associated with any
 * project; the non-project code is specified in the Project accounting preferences (PM101000) window.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInCustomerCreditWriteOffDtoFactory testFactory()
 */
class ProjectInCustomerCreditWriteOffDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The internal identifier. */
        public ?int $internalId = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
