<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Note for Vat report header.
 */
class NoteInUpdateNoteDto extends Model
{
    #[Property]
    public ?string $value;
}
