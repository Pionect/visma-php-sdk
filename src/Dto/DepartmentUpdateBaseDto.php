<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DepartmentUpdateBaseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DepartmentUpdateBaseDtoFactory factory()
 */
class DepartmentUpdateBaseDto extends Model
{
    public function __construct(
        public ?string $departmentId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseAccount = null,
        public ?array $expenseSubaccount = null,
    ) {}
}
