<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; Branch &gt; The branch using the numbering series.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInNumberingSequenceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInNumberingSequenceDtoFactory testFactory()
 */
class BranchInNumberingSequenceDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
