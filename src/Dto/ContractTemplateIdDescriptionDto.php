<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContractTemplateIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContractTemplateIdDescriptionDtoFactory factory()
 */
class ContractTemplateIdDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
