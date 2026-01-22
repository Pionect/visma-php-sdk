<?php

// auto-generated

use Pionect\VismaSdk\Requests\NumberSequence\NumberSequenceGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\NumberSequence\NumberSequenceGetBynumberingIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the numberSequenceGetBynumberingId method in the NumberSequence resource', function () {
    Saloon::fake([
        NumberSequenceGetBynumberingIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'numberSequences',
                'id' => 'mock-id-123',
                'attributes' => [
                    'numberingId' => 'mock-id-123',
                    'description' => 'Mock value',
                    'manualNumbering' => true,
                    'newNumberSymbol' => 'Mock value',
                    'sequence' => [],
                ],
            ],
        ], 200),
    ]);

    $request = new NumberSequenceGetBynumberingIdRequest(
        numberingIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(NumberSequenceGetBynumberingIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->numberingId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->manualNumbering->toBe(true)
        ->newNumberSymbol->toBe('Mock value');
});

it('calls the numberSequenceGetAllCollection method in the NumberSequence resource', function () {
    Saloon::fake([
        NumberSequenceGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'numberSequences',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'numberingId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'manualNumbering' => true,
                        'newNumberSymbol' => 'Mock value',
                        'sequence' => [],
                    ],
                ],
                1 => [
                    'type' => 'numberSequences',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'numberingId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'manualNumbering' => true,
                        'newNumberSymbol' => 'Mock value',
                        'sequence' => [],
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new NumberSequenceGetAllCollectionRequest);

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (NumberSequenceGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->numberingId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->manualNumbering->toBe(true)
        ->newNumberSymbol->toBe('Mock value');
});
