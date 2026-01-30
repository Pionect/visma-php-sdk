<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\NoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\NoteDtoFactory testFactory()
 */
class NoteDto extends Model
{
    public function __construct(
        public ?string $note = null,
    ) {}
}
