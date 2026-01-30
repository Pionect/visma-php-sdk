<?php

use Pionect\VismaSdk\Dto\TimeCardUpdateDto;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardCreateTimeCardRequest;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardGetAllEmployeeTimeCardsRequest;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardGetEmployeeTimeCardByreferenceNumberRequest;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardPutTimeCardOnHoldBytimeCardCdRequest;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardSendTimeCardToApprovalBytimeCardCdRequest;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardSubmitTimeCardBytimeCardCdRequest;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardUpdateTimeCardByreferenceNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the timeCardGetEmployeeTimeCardByreferenceNumberRequest method in the TimeCard resource', function () {
    Saloon::fake([
        TimeCardGetEmployeeTimeCardByreferenceNumberRequest::class => MockResponse::make([
            'refNbr' => 'String value',
            'status' => 'String value',
            'approvalStatus' => 'String value',
            'week' => null,
            'employee' => null,
            'type' => 'String value',
            'origRefNbr' => 'String value',
            'timeSpent' => 42,
            'invoiceable' => 42,
            'overtimeSpent' => 42,
            'invoiceableOvertime' => 42,
            'totalTimeSpent' => 42,
            'invoiceableTotalTime' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'summary' => [],
            'materials' => [],
            'approvalStatusText' => 'String value',
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new TimeCardGetEmployeeTimeCardByreferenceNumberRequest(
        referenceNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardGetEmployeeTimeCardByreferenceNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->approvalStatus->toBe('String value')
        ->week->toBeNull()
        ->employee->toBeNull()
        ->type->toBe('String value')
        ->origRefNbr->toBe('String value')
        ->timeSpent->toBe(42)
        ->invoiceable->toBe(42)
        ->overtimeSpent->toBe(42)
        ->invoiceableOvertime->toBe(42)
        ->totalTimeSpent->toBe(42)
        ->invoiceableTotalTime->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the timeCardUpdateTimeCardByreferenceNumberRequest method in the TimeCard resource', function () {
    $bodyData = new TimeCardUpdateDto(
        refNbr: 'String value',
        employee: 'String value',
        summary: [],
        materials: []
    );

    Saloon::fake([
        TimeCardUpdateTimeCardByreferenceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new TimeCardUpdateTimeCardByreferenceNumberRequest(
        referenceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardUpdateTimeCardByreferenceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the timeCardGetAllEmployeeTimeCardsRequest method in the TimeCard resource', function () {
    Saloon::fake([
        TimeCardGetAllEmployeeTimeCardsRequest::class => MockResponse::make([
            0 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'week' => null,
                'employee' => null,
                'type' => 'String value',
                'origRefNbr' => 'String value',
                'timeSpent' => 42,
                'invoiceable' => 42,
                'overtimeSpent' => 42,
                'invoiceableOvertime' => 42,
                'totalTimeSpent' => 42,
                'invoiceableTotalTime' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'summary' => [],
                'materials' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'week' => null,
                'employee' => null,
                'type' => 'String value',
                'origRefNbr' => 'String value',
                'timeSpent' => 42,
                'invoiceable' => 42,
                'overtimeSpent' => 42,
                'invoiceableOvertime' => 42,
                'totalTimeSpent' => 42,
                'invoiceableTotalTime' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'summary' => [],
                'materials' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new TimeCardGetAllEmployeeTimeCardsRequest(
        status: 'test string',
        week: 'test string',
        type: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        employeeCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardGetAllEmployeeTimeCardsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->approvalStatus->toBe('String value')
        ->week->toBeNull()
        ->employee->toBeNull()
        ->type->toBe('String value')
        ->origRefNbr->toBe('String value')
        ->timeSpent->toBe(42)
        ->invoiceable->toBe(42)
        ->overtimeSpent->toBe(42)
        ->invoiceableOvertime->toBe(42)
        ->totalTimeSpent->toBe(42)
        ->invoiceableTotalTime->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the timeCardCreateTimeCardRequest method in the TimeCard resource', function () {
    $bodyData = new TimeCardUpdateDto(
        refNbr: 'String value',
        employee: 'String value',
        summary: [],
        materials: []
    );

    Saloon::fake([
        TimeCardCreateTimeCardRequest::class => MockResponse::make([], 201),
    ]);

    $request = new TimeCardCreateTimeCardRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardCreateTimeCardRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the timeCardSubmitTimeCardBytimeCardCdRequest method in the TimeCard resource', function () {
    $bodyData = new TimeCardUpdateDto(
        refNbr: 'String value',
        employee: 'String value',
        summary: [],
        materials: []
    );

    Saloon::fake([
        TimeCardSubmitTimeCardBytimeCardCdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new TimeCardSubmitTimeCardBytimeCardCdRequest(
        timeCardCd: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardSubmitTimeCardBytimeCardCdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the timeCardSendTimeCardToApprovalBytimeCardCdRequest method in the TimeCard resource', function () {
    $bodyData = new TimeCardUpdateDto(
        refNbr: 'String value',
        employee: 'String value',
        summary: [],
        materials: []
    );

    Saloon::fake([
        TimeCardSendTimeCardToApprovalBytimeCardCdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new TimeCardSendTimeCardToApprovalBytimeCardCdRequest(
        timeCardCd: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardSendTimeCardToApprovalBytimeCardCdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the timeCardPutTimeCardOnHoldBytimeCardCdRequest method in the TimeCard resource', function () {
    $bodyData = new TimeCardUpdateDto(
        refNbr: 'String value',
        employee: 'String value',
        summary: [],
        materials: []
    );

    Saloon::fake([
        TimeCardPutTimeCardOnHoldBytimeCardCdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new TimeCardPutTimeCardOnHoldBytimeCardCdRequest(
        timeCardCd: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardPutTimeCardOnHoldBytimeCardCdRequest::class);

    expect($response->status())->toBe(201);
});
