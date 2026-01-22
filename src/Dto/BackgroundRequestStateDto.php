<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class BackgroundRequestStateDto extends Model
{
    /**
     * Current status of a background API operation. Possible values are 'Started', 'Finished' and 'Failed'.
     */
    #[Property]
    public ?string $status;

    /**
     * The Http Status Code of the finished background API operation. Value is 0 when operation is not done.
     */
    #[Property]
    public ?int $statusCode;

    /**
     * Time when background API operation was requested
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $receivedUtc;

    /**
     * Time when processing of background API operation was started
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startedUtc;

    /**
     * Time when background API operation was finished processing
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $finishedUtc;

    /**
     * The webhook uri used to notify when background API operation is finished, or 'none' if no notification is configured
     */
    #[Property]
    public ?string $webhookAddress;

    /**
     * Any error message during processing of background API operation request. Note that any error response from the actual endpoint can be obtained by calling the ContentLocation address from the webhook notifaction response or the background state document.
     */
    #[Property]
    public ?string $errorMessage;

    #[Property]
    public ?string $reference;

    /**
     * The endpoint that was requested to be processed as a background API operation.
     */
    #[Property]
    public ?string $originalUri;

    /**
     * Indicates whether or not the background API operation ended with a response content. Value is updated only when background API operation is finished.
     */
    #[Property]
    public ?bool $hasResponseContent;

    /**
     * Indicates whether or not the background API operation request has a request content.
     */
    #[Property]
    public ?bool $hasRequestContent;

    /**
     * The uri from where the client can get the response from the background API operation, if any is available.
     */
    #[Property]
    public ?string $contentLocation;

    /**
     * Any response headers from the finished background API operation.
     */
    #[Property]
    public ?object $responseHeaders;
}
