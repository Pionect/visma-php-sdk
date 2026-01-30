<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\Background\BackgroundGetBackgroundApiOperationByrequestIdRequest;
use Pionect\VismaSdk\Requests\Background\BackgroundGetBackgroundApiOperationContentByrequestIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the backgroundGetBackgroundApiOperationByrequestIdRequest method in the Background resource', function () {
    Saloon::fake([
        BackgroundGetBackgroundApiOperationByrequestIdRequest::class => MockResponse::make([
            'status' => 'String value',
            'statusCode' => 42,
            'receivedUtc' => '2025-11-22T10:40:04+00:00',
            'startedUtc' => '2025-11-22T10:40:04+00:00',
            'finishedUtc' => '2025-11-22T10:40:04+00:00',
            'webhookAddress' => 'String value',
            'errorMessage' => 'String value',
            'reference' => 'String value',
            'originalUri' => 'String value',
            'hasResponseContent' => true,
            'hasRequestContent' => true,
            'contentLocation' => 'String value',
            'responseHeaders' => [],
        ], 200),
    ]);

    $request = new BackgroundGetBackgroundApiOperationByrequestIdRequest(
        requestId: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BackgroundGetBackgroundApiOperationByrequestIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->status->toBe('String value')
        ->statusCode->toBe(42)
        ->receivedUtc->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->startedUtc->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->finishedUtc->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->webhookAddress->toBe('String value')
        ->errorMessage->toBe('String value')
        ->reference->toBe('String value')
        ->originalUri->toBe('String value')
        ->hasResponseContent->toBe(true)
        ->hasRequestContent->toBe(true)
        ->contentLocation->toBe('String value');
});

it('calls the backgroundGetBackgroundApiOperationContentByrequestIdRequest method in the Background resource', function () {
    Saloon::fake([
        BackgroundGetBackgroundApiOperationContentByrequestIdRequest::class => MockResponse::make([
            'name' => 'Mock value',
        ], 200),
    ]);

    $request = new BackgroundGetBackgroundApiOperationContentByrequestIdRequest(
        requestId: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BackgroundGetBackgroundApiOperationContentByrequestIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('Mock value');
});
