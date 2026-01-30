<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WebhookNotificationFeedbackDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WebhookNotificationFeedbackDtoFactory factory()
 */
class WebhookNotificationFeedbackDto extends Model
{
    public function __construct(
        public ?string $notificationId = null,
        public ?string $source = null,
        public ?string $description = null,
        public ?bool $isSuccess = null,
    ) {}
}
