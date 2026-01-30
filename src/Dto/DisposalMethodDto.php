<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DisposalMethodDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DisposalMethodDtoFactory factory()
 */
class DisposalMethodDto extends Model
{
    public function __construct(
        public ?string $description = null,
    ) {}
}
