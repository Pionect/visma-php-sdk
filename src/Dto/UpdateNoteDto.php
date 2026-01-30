<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UpdateNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UpdateNoteDtoFactory testFactory()
 */
class UpdateNoteDto extends Model
{
    public function __construct(
        public ?NoteInUpdateNoteDto $note = null,
    ) {}
}
