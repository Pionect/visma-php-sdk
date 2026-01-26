<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Background\BackgroundGetBackgroundApiOperationByrequestIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the backgroundGetBackgroundApiOperationByrequestId method in the Background resource', function () {
    Saloon::fake([
        BackgroundGetBackgroundApiOperationByrequestIdRequest::class => MockResponse::make([
            'status' => 'Mock value',
            'statusCode' => 42,
            'receivedUtc' => '2025-11-22T10:40:04.065Z',
            'startedUtc' => '2025-11-22T10:40:04.065Z',
            'finishedUtc' => '2025-11-22T10:40:04.065Z',
            'webhookAddress' => 'Mock value',
            'errorMessage' => 'Mock value',
            'reference' => 'Mock value',
            'originalUri' => 'Mock value',
            'hasResponseContent' => true,
            'hasRequestContent' => true,
            'contentLocation' => 'Mock value',
            'responseHeaders' => (object) [],
        ], 200),
    ]);

    $request = new BackgroundGetBackgroundApiOperationByrequestIdRequest(
        requestIdId: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BackgroundGetBackgroundApiOperationByrequestIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->status->toBe('Mock value')
        ->statusCode->toBe(42)
        ->receivedUtc->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->startedUtc->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->finishedUtc->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->webhookAddress->toBe('Mock value')
        ->errorMessage->toBe('Mock value')
        ->reference->toBe('Mock value')
        ->originalUri->toBe('Mock value')
        ->hasResponseContent->toBeTrue()
        ->hasRequestContent->toBeTrue()
        ->contentLocation->toBe('Mock value')
        ->responseHeaders->toBeInstanceOf(stdClass::class);
});
