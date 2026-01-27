<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Background\BackgroundGetBackgroundApiOperationByrequestIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the backgroundGetBackgroundApiOperationByrequestId method in the Background resource', function () {
    Saloon::fake([
        BackgroundGetBackgroundApiOperationByrequestIdRequest::class => MockResponse::make([
            'status' => 'String value',
            'statusCode' => 42,
            'receivedUtc' => '2025-11-22T10:40:04.065Z',
            'startedUtc' => '2025-11-22T10:40:04.065Z',
            'finishedUtc' => '2025-11-22T10:40:04.065Z',
            'webhookAddress' => 'String value',
            'errorMessage' => 'String value',
            'reference' => 'String value',
            'originalUri' => 'String value',
            'hasResponseContent' => true,
            'hasRequestContent' => true,
            'contentLocation' => 'String value',
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
        ->status->toBe('String value')
        ->statusCode->toBe(42)
        ->receivedUtc->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->startedUtc->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->finishedUtc->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->webhookAddress->toBe('String value')
        ->errorMessage->toBe('String value')
        ->reference->toBe('String value')
        ->originalUri->toBe('String value')
        ->hasResponseContent->toBeTrue()
        ->hasRequestContent->toBeTrue()
        ->contentLocation->toBe('String value');
});
