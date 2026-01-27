<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\LotSerialClass\LotSerialClassGetAllLotSerialClassCollectionRequest;
use Pionect\VismaSdk\Requests\LotSerialClass\LotSerialClassGetByidRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the lotSerialClassGetByid method in the LotSerialClass resource', function () {
    Saloon::fake([
        LotSerialClassGetByidRequest::class => MockResponse::make([
            'description' => 'String value',
            'trackingMethod' => 'String value',
            'trackExpirationDate' => '2025-11-22T10:40:04.065Z',
            'requiredForDropShip' => true,
            'assignmentMethod' => 'String value',
            'issueMethod' => 'String value',
            'autoIncrementalValueBetweenClasses' => true,
            'autoIncrementalValue' => 'String value',
            'autoGenerateNextNumber' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'details' => [],
            'errorInfo' => 'String value',
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
        ->description->toBe('String value')
        ->trackingMethod->toBe('String value')
        ->trackExpirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requiredForDropShip->toBeTrue()
        ->assignmentMethod->toBe('String value')
        ->issueMethod->toBe('String value')
        ->autoIncrementalValueBetweenClasses->toBeTrue()
        ->autoIncrementalValue->toBe('String value')
        ->autoGenerateNextNumber->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the lotSerialClassGetAllLotSerialClassCollection method in the LotSerialClass resource', function () {
    Saloon::fake([
        LotSerialClassGetAllLotSerialClassCollectionRequest::class => MockResponse::make([
            0 => [
                'description' => 'String value',
                'trackingMethod' => 'String value',
                'trackExpirationDate' => '2025-11-22T10:40:04.065Z',
                'requiredForDropShip' => true,
                'assignmentMethod' => 'String value',
                'issueMethod' => 'String value',
                'autoIncrementalValueBetweenClasses' => true,
                'autoIncrementalValue' => 'String value',
                'autoGenerateNextNumber' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'details' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'description' => 'String value',
                'trackingMethod' => 'String value',
                'trackExpirationDate' => '2025-11-22T10:40:04.065Z',
                'requiredForDropShip' => true,
                'assignmentMethod' => 'String value',
                'issueMethod' => 'String value',
                'autoIncrementalValueBetweenClasses' => true,
                'autoIncrementalValue' => 'String value',
                'autoGenerateNextNumber' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'details' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new LotSerialClassGetAllLotSerialClassCollectionRequest(description: 'test string', trackingMethod: 'test string', trackExpirationDate: true, requiredForDropShip: true, assignmentMethod: 'test string', issueMethod: 'test string', autoIncrementalValueBetweenClasses: true, autoIncrementalValue: 'test string', autoGenerateNextNumber: true, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (LotSerialClassGetAllLotSerialClassCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->description->toBe('String value')
        ->trackingMethod->toBe('String value')
        ->trackExpirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requiredForDropShip->toBeTrue()
        ->assignmentMethod->toBe('String value')
        ->issueMethod->toBe('String value')
        ->autoIncrementalValueBetweenClasses->toBeTrue()
        ->autoIncrementalValue->toBe('String value')
        ->autoGenerateNextNumber->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});
