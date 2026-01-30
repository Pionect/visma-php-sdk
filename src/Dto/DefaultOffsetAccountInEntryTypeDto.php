<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Default offset account &gt; The account that is used by default as the offset account for this entry
 * type.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultOffsetAccountInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultOffsetAccountInEntryTypeDtoFactory testFactory()
 */
class DefaultOffsetAccountInEntryTypeDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
