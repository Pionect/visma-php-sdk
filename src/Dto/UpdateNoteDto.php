<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UpdateNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UpdateNoteDtoFactory testFactory()
 */
class UpdateNoteDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
    ) {}
}
