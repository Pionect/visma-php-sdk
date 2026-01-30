<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContractTemplateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContractTemplateDtoFactory factory()
 */
class ContractTemplateDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $attributes = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
