<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class UpdateNoteDto extends Model
{
    #[Property]
    public ?noteInUpdateNoteDto $note;
}
