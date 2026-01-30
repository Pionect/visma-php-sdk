<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTransactionDocumentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTransactionDocumentUpdateDtoFactory factory()
 */
class ProjectTransactionDocumentUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $refNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $status;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $module;

    #[Property]
    public ?array $lines;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;
}
