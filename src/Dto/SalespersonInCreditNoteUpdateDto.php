<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The identifier of the salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalespersonInCreditNoteUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalespersonInCreditNoteUpdateDtoFactory testFactory()
 */
class SalespersonInCreditNoteUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
