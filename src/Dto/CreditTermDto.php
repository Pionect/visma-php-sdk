<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditTermDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermDtoFactory testFactory()
 */
class CreditTermDto extends Model
{
    public function __construct(
        public ?string $termsId = null,
        public ?string $description = null,
        public ?string $visibleTo = null,
        public ?string $dueDateType = null,
        public ?string $moveDueDateIfOnTheWeekend = null,
        public ?int $dueDay1 = null,
        #[MapName('dueDay1DayFrom1')]
        public ?int $dueDay1dayFrom1 = null,
        #[MapName('dueDay1DayTo1')]
        public ?int $dueDay1dayTo1 = null,
        public ?int $dueDay2 = null,
        #[MapName('dueDay2DayFrom1')]
        public ?int $dueDay2dayFrom1 = null,
        #[MapName('dueDay2DayTo1')]
        public ?int $dueDay2dayTo1 = null,
        public ?string $discountType = null,
        public ?int $discountDay = null,
        public int|float|null $discountPercent = null,
        public ?int $delayDays = null,
        public ?string $calculationType = null,
        public ?string $instalmentType = null,
        public ?int $numberOfInstalments = null,
        public ?string $instalmentFrequency = null,
        public ?string $instalmentMethod = null,
        public ?array $instalmentsSchedule = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
