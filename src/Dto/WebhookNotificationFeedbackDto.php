<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class WebhookNotificationFeedbackDto extends Model
{
    /** The ID of the notification. */
    #[Property]
    public ?string $notificationId;

    /** The source of the notification */
    #[Property]
    public ?string $source;

    /** The description text of the notification. Such as "Operation failed". */
    #[Property]
    public ?string $description;

    /** Was the notification successfully consumed: True or false. */
    #[Property]
    public ?bool $isSuccess;
}
