<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Organisation details tab &gt; Configuration settings section &gt; Industry code &gt; The
 * branch's industry code ID.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IndustryCodeInBranchDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IndustryCodeInBranchDtoFactory testFactory()
 */
class IndustryCodeInBranchDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
