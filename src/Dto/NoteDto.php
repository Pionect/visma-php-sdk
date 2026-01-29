<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\NoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\NoteDtoFactory factory()
 */
class NoteDto extends Model
{
    #[Property]
    public ?string $note;
}
