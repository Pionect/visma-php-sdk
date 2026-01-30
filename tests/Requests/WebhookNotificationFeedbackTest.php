<?php

use Pionect\VismaSdk\Dto\WebhookNotificationFeedbackDto;
use Pionect\VismaSdk\Requests\WebhookNotificationFeedback\WebhookNotificationFeedbackPostRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the webhookNotificationFeedbackPostRequest method in the WebhookNotificationFeedback resource', function () {
    $bodyData = new WebhookNotificationFeedbackDto(
        notificationId: 'mock-id-123',
        source: 'String value',
        description: 'String value',
        isSuccess: true
    );

    Saloon::fake([
        WebhookNotificationFeedbackPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new WebhookNotificationFeedbackPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(WebhookNotificationFeedbackPostRequest::class);

    expect($response->status())->toBe(201);
});
