<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\WebhookNotificationFeedbackDtoFactory testFactory()
 */
class WebhookNotificationFeedbackDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $notificationId = null,
        public ?string $source = null,
        public ?string $description = null,
        public ?bool $isSuccess = null,
    ) {}
}
