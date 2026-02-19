<?php

use Pionect\VismaSdk\Enums\LotSerialClassAssignmentMethodEnum;
use Pionect\VismaSdk\Enums\LotSerialClassIssueMethodEnum;
use Pionect\VismaSdk\Enums\LotSerialClassTrackingMethodEnum;
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
            'trackingMethod' => 'NotNumbered',
            'trackExpirationDate' => true,
            'requiredForDropShip' => true,
            'assignmentMethod' => 'WhenReceived',
            'issueMethod' => 'FIFO',
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
        ->trackingMethod->toEqual(LotSerialClassTrackingMethodEnum::NOT_NUMBERED)
        ->trackExpirationDate->toBe(true)
        ->requiredForDropShip->toBe(true)
        ->assignmentMethod->toEqual(LotSerialClassAssignmentMethodEnum::WHEN_RECEIVED)
        ->issueMethod->toEqual(LotSerialClassIssueMethodEnum::FIFO)
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
                'trackingMethod' => 'NotNumbered',
                'trackExpirationDate' => true,
                'requiredForDropShip' => true,
                'assignmentMethod' => 'WhenReceived',
                'issueMethod' => 'FIFO',
                'autoIncrementalValueBetweenClasses' => true,
                'autoIncrementalValue' => 'String value',
                'autoGenerateNextNumber' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'details' => [],
                'errorInfo' => 'String value',
            ],
            1 => [
                'description' => 'String value',
                'trackingMethod' => 'NotNumbered',
                'trackExpirationDate' => true,
                'requiredForDropShip' => true,
                'assignmentMethod' => 'WhenReceived',
                'issueMethod' => 'FIFO',
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->description->toBe('String value')
        ->trackingMethod->toEqual(LotSerialClassTrackingMethodEnum::NOT_NUMBERED)
        ->trackExpirationDate->toBe(true)
        ->requiredForDropShip->toBe(true)
        ->assignmentMethod->toEqual(LotSerialClassAssignmentMethodEnum::WHEN_RECEIVED)
        ->issueMethod->toEqual(LotSerialClassIssueMethodEnum::FIFO)
        ->autoIncrementalValueBetweenClasses->toBe(true)
        ->autoIncrementalValue->toBe('String value')
        ->autoGenerateNextNumber->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});
