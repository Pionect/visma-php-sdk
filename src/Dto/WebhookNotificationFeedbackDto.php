<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\WebhookNotificationFeedbackDtoFactory testFactory()
 */
class WebhookNotificationFeedbackDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\WebhookNotificationFeedbackDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The ID of the notification. */
        public ?string $notificationId = null,
        /** The source of the notification */
        public ?string $source = null,
        /** The description text of the notification. Such as "Operation failed". */
        public ?string $description = null,
        /** Was the notification successfully consumed: True or false. */
        public ?bool $isSuccess = null,
    ) {}
}
