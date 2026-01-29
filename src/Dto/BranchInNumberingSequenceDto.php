<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; Branch &gt; The branch using the numbering series.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInNumberingSequenceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInNumberingSequenceDtoFactory factory()
 */
class BranchInNumberingSequenceDto extends Model
{
    /** Click the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
