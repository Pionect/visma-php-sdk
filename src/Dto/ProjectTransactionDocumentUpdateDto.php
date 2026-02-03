<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ProjectTransactionDocumentUpdateDtoFactory testFactory()
 */
class ProjectTransactionDocumentUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $refNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $status = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $module = null,
        /** @var ProjectTransactionLineUpdateDto[]|null */
        public ?array $lines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
    ) {}
}
