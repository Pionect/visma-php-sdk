<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TimeCardMaterialsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TimeCardMaterialsUpdateDtoFactory factory()
 */
class TimeCardMaterialsUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNumber = null,
        public ?ItemIdInTimeCardMaterialsUpdateDto $itemId = null,
        public ?DescriptionInTimeCardMaterialsUpdateDto $description = null,
        public ?UoMinTimeCardMaterialsUpdateDto $uoM = null,
        public ?ProjectInTimeCardMaterialsUpdateDto $project = null,
        public ?ProjectTaskInTimeCardMaterialsUpdateDto $projectTask = null,
        public ?MonInTimeCardMaterialsUpdateDto $mon = null,
        public ?TueInTimeCardMaterialsUpdateDto $tue = null,
        public ?WedInTimeCardMaterialsUpdateDto $wed = null,
        public ?ThuInTimeCardMaterialsUpdateDto $thu = null,
        public ?FriInTimeCardMaterialsUpdateDto $fri = null,
        public ?SatInTimeCardMaterialsUpdateDto $sat = null,
        public ?SunInTimeCardMaterialsUpdateDto $sun = null,
    ) {}
}
