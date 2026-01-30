<?php

// Generated 2026-01-30 14:10:14

use Pionect\VismaSdk\Requests\LotSerialClass\LotSerialClassGetAllLotSerialClassRequest;
use Pionect\VismaSdk\Requests\LotSerialClass\LotSerialClassGetByidRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the lotSerialClassGetByidRequest method in the LotSerialClass resource', function () {
    Saloon::fake([
        LotSerialClassGetByidRequest::class => MockResponse::make([
            'description' => 'String value',
            'trackingMethod' => 'String value',
            'trackExpirationDate' => true,
            'requiredForDropShip' => true,
            'assignmentMethod' => 'String value',
            'issueMethod' => 'String value',
            'autoIncrementalValueBetweenClasses' => true,
            'autoIncrementalValue' => 'String value',
            'autoGenerateNextNumber' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'details' => [],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new LotSerialClassGetByidRequest(
        id: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LotSerialClassGetByidRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->description->toBe('String value')
        ->trackingMethod->toBe('String value')
        ->trackExpirationDate->toBe(true)
        ->requiredForDropShip->toBe(true)
        ->assignmentMethod->toBe('String value')
        ->issueMethod->toBe('String value')
        ->autoIncrementalValueBetweenClasses->toBe(true)
        ->autoIncrementalValue->toBe('String value')
        ->autoGenerateNextNumber->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the lotSerialClassGetAllLotSerialClassRequest method in the LotSerialClass resource', function () {
    Saloon::fake([
        LotSerialClassGetAllLotSerialClassRequest::class => MockResponse::make([
            0 => [
                'description' => 'String value',
                'trackingMethod' => 'String value',
                'trackExpirationDate' => true,
                'requiredForDropShip' => true,
                'assignmentMethod' => 'String value',
                'issueMethod' => 'String value',
                'autoIncrementalValueBetweenClasses' => true,
                'autoIncrementalValue' => 'String value',
                'autoGenerateNextNumber' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'details' => [],
                'errorInfo' => 'String value',
            ],
            1 => [
                'description' => 'String value',
                'trackingMethod' => 'String value',
                'trackExpirationDate' => true,
                'requiredForDropShip' => true,
                'assignmentMethod' => 'String value',
                'issueMethod' => 'String value',
                'autoIncrementalValueBetweenClasses' => true,
                'autoIncrementalValue' => 'String value',
                'autoGenerateNextNumber' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'details' => [],
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new LotSerialClassGetAllLotSerialClassRequest(
        description: 'test string',
        trackingMethod: 'test string',
        trackExpirationDate: true,
        requiredForDropShip: true,
        assignmentMethod: 'test string',
        issueMethod: 'test string',
        autoIncrementalValueBetweenClasses: true,
        autoIncrementalValue: 'test string',
        autoGenerateNextNumber: true,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LotSerialClassGetAllLotSerialClassRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->description->toBe('String value')
        ->trackingMethod->toBe('String value')
        ->trackExpirationDate->toBe(true)
        ->requiredForDropShip->toBe(true)
        ->assignmentMethod->toBe('String value')
        ->issueMethod->toBe('String value')
        ->autoIncrementalValueBetweenClasses->toBe(true)
        ->autoIncrementalValue->toBe('String value')
        ->autoGenerateNextNumber->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});
