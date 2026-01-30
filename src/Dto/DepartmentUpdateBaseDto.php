<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DepartmentUpdateBaseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DepartmentUpdateBaseDtoFactory factory()
 */
class DepartmentUpdateBaseDto extends Model
{
    #[Property]
    public ?string $departmentId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseAccount;

    #[Property]
    public ?array $expenseSubaccount;
}
