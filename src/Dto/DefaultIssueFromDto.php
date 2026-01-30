<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultIssueFromDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultIssueFromDtoFactory factory()
 */
class DefaultIssueFromDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
