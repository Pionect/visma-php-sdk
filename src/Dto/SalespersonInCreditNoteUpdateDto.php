<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The identifier of the salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalespersonInCreditNoteUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalespersonInCreditNoteUpdateDtoFactory factory()
 */
class SalespersonInCreditNoteUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
