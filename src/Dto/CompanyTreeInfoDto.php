<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CompanyTreeInfoDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CompanyTreeInfoDtoFactory testFactory()
 */
class CompanyTreeInfoDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $active = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $owner = null,
        #[MapName('workGroupID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $workGroupId = null,
    ) {}
}
