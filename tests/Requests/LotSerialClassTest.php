<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\LotSerialClass\LotSerialClassGetAllLotSerialClassCollectionRequest;
use Pionect\VismaSdk\Requests\LotSerialClass\LotSerialClassGetByidRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the lotSerialClassGetByid method in the LotSerialClass resource', function () {
    Saloon::fake([
        LotSerialClassGetByidRequest::class => MockResponse::make([
            'description' => 'Mock value',
            'trackingMethod' => 'Mock value',
            'trackExpirationDate' => '2025-11-22T10:40:04.065Z',
            'requiredForDropShip' => true,
            'assignmentMethod' => 'Mock value',
            'issueMethod' => 'Mock value',
            'autoIncrementalValueBetweenClasses' => true,
            'autoIncrementalValue' => 'Mock value',
            'autoGenerateNextNumber' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'details' => [],
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new LotSerialClassGetByidRequest(
        idId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LotSerialClassGetByidRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->description->toBe('Mock value')
        ->trackingMethod->toBe('Mock value')
        ->trackExpirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requiredForDropShip->toBeTrue()
        ->assignmentMethod->toBe('Mock value')
        ->issueMethod->toBe('Mock value')
        ->autoIncrementalValueBetweenClasses->toBeTrue()
        ->autoIncrementalValue->toBe('Mock value')
        ->autoGenerateNextNumber->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the lotSerialClassGetAllLotSerialClassCollection method in the LotSerialClass resource', function () {
    Saloon::fake([
        LotSerialClassGetAllLotSerialClassCollectionRequest::class => MockResponse::make([
            0 => [
                'description' => 'Mock value',
                'trackingMethod' => 'Mock value',
                'trackExpirationDate' => '2025-11-22T10:40:04.065Z',
                'requiredForDropShip' => true,
                'assignmentMethod' => 'Mock value',
                'issueMethod' => 'Mock value',
                'autoIncrementalValueBetweenClasses' => true,
                'autoIncrementalValue' => 'Mock value',
                'autoGenerateNextNumber' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'details' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'description' => 'Mock value',
                'trackingMethod' => 'Mock value',
                'trackExpirationDate' => '2025-11-22T10:40:04.065Z',
                'requiredForDropShip' => true,
                'assignmentMethod' => 'Mock value',
                'issueMethod' => 'Mock value',
                'autoIncrementalValueBetweenClasses' => true,
                'autoIncrementalValue' => 'Mock value',
                'autoGenerateNextNumber' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'details' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new LotSerialClassGetAllLotSerialClassCollectionRequest(description: 'test string', trackingMethod: 'test string', trackExpirationDate: true, requiredForDropShip: true, assignmentMethod: 'test string', issueMethod: 'test string', autoIncrementalValueBetweenClasses: true, autoIncrementalValue: 'test string', autoGenerateNextNumber: true, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (LotSerialClassGetAllLotSerialClassCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->description->toBe('Mock value')
        ->trackingMethod->toBe('Mock value')
        ->trackExpirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requiredForDropShip->toBeTrue()
        ->assignmentMethod->toBe('Mock value')
        ->issueMethod->toBe('Mock value')
        ->autoIncrementalValueBetweenClasses->toBeTrue()
        ->autoIncrementalValue->toBe('Mock value')
        ->autoGenerateNextNumber->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
