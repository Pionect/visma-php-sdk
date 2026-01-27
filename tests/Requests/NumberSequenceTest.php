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
            'numberingId' => 'mock-id-123',
            'description' => 'String value',
            'manualNumbering' => true,
            'newNumberSymbol' => 'String value',
            'sequence' => [],
            'id' => 'mock-id-123',
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
        ->description->toBe('String value')
        ->manualNumbering->toBeTrue()
        ->newNumberSymbol->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the numberSequenceGetAllCollection method in the NumberSequence resource', function () {
    Saloon::fake([
        NumberSequenceGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'numberingId' => 'mock-id-123',
                'description' => 'String value',
                'manualNumbering' => true,
                'newNumberSymbol' => 'String value',
                'sequence' => [],
                'id' => 'mock-id-123',
            ],
            1 => [
                'numberingId' => 'mock-id-123',
                'description' => 'String value',
                'manualNumbering' => true,
                'newNumberSymbol' => 'String value',
                'sequence' => [],
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new NumberSequenceGetAllCollectionRequest);

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (NumberSequenceGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->numberingId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->manualNumbering->toBeTrue()
        ->newNumberSymbol->toBe('String value')
        ->id->toBe('mock-id-123');
});
