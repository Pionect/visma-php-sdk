<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The financial period to which the transactions recorded in the document should be posted. Use the
 * format MMYYYY.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PostPeriodInCreditNoteUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PostPeriodInCreditNoteUpdateDtoFactory factory()
 */
class PostPeriodInCreditNoteUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
