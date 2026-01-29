<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Note for Vat report header.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\NoteInUpdateNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\NoteInUpdateNoteDtoFactory factory()
 */
class NoteInUpdateNoteDto extends Model
{
    #[Property]
    public ?string $value;
}
