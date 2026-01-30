<?php

// Generated 2026-01-30 14:10:14

use Pionect\VismaSdk\Requests\NumberSequence\NumberSequenceGetAllRequest;
use Pionect\VismaSdk\Requests\NumberSequence\NumberSequenceGetBynumberingIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the numberSequenceGetBynumberingIdRequest method in the NumberSequence resource', function () {
    Saloon::fake([
        NumberSequenceGetBynumberingIdRequest::class => MockResponse::make([
            'numberingId' => 'mock-id-123',
            'description' => 'String value',
            'manualNumbering' => true,
            'newNumberSymbol' => 'String value',
            'sequence' => [],
        ], 200),
    ]);

    $request = new NumberSequenceGetBynumberingIdRequest(
        numberingId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(NumberSequenceGetBynumberingIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->numberingId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->manualNumbering->toBe(true)
        ->newNumberSymbol->toBe('String value');
});

it('calls the numberSequenceGetAllRequest method in the NumberSequence resource', function () {
    Saloon::fake([
        NumberSequenceGetAllRequest::class => MockResponse::make([
            0 => [
                'numberingId' => 'mock-id-123',
                'description' => 'String value',
                'manualNumbering' => true,
                'newNumberSymbol' => 'String value',
                'sequence' => [],
            ],
            1 => [
                'numberingId' => 'mock-id-123',
                'description' => 'String value',
                'manualNumbering' => true,
                'newNumberSymbol' => 'String value',
                'sequence' => [],
            ],
        ], 200),
    ]);

    $request = new NumberSequenceGetAllRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(NumberSequenceGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->numberingId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->manualNumbering->toBe(true)
        ->newNumberSymbol->toBe('String value');
});
