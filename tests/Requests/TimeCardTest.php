<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardGetAllEmployeeTimeCardsCollectionRequest;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardGetEmployeeTimeCardByreferenceNumberRequest;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardPutTimeCardOnHoldBytimeCardCdRequest;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardSendTimeCardToApprovalBytimeCardCdRequest;
use Pionect\VismaSdk\Requests\TimeCard\TimeCardSubmitTimeCardBytimeCardCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the timeCardGetEmployeeTimeCardByreferenceNumber method in the TimeCard resource', function () {
    Saloon::fake([
        TimeCardGetEmployeeTimeCardByreferenceNumberRequest::class => MockResponse::make([
            'refNbr' => 'String value',
            'status' => 'String value',
            'approvalStatus' => 'String value',
            'week' => null,
            'employee' => null,
            'type' => 'String value',
            'origRefNbr' => 'String value',
            'timeSpent' => '2025-11-22T10:40:04.065Z',
            'invoiceable' => 42,
            'overtimeSpent' => 42,
            'invoiceableOvertime' => 42,
            'totalTimeSpent' => 42,
            'invoiceableTotalTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'summary' => [],
            'materials' => [],
            'approvalStatusText' => 'String value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
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
        ->timeSpent->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->invoiceable->toBe(42)
        ->overtimeSpent->toBe(42)
        ->invoiceableOvertime->toBe(42)
        ->totalTimeSpent->toBe(42)
        ->invoiceableTotalTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the timeCardGetAllEmployeeTimeCardsCollection method in the TimeCard resource', function () {
    Saloon::fake([
        TimeCardGetAllEmployeeTimeCardsCollectionRequest::class => MockResponse::make([
            0 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'week' => null,
                'employee' => null,
                'type' => 'String value',
                'origRefNbr' => 'String value',
                'timeSpent' => '2025-11-22T10:40:04.065Z',
                'invoiceable' => 42,
                'overtimeSpent' => 42,
                'invoiceableOvertime' => 42,
                'totalTimeSpent' => 42,
                'invoiceableTotalTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'summary' => [],
                'materials' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'week' => null,
                'employee' => null,
                'type' => 'String value',
                'origRefNbr' => 'String value',
                'timeSpent' => '2025-11-22T10:40:04.065Z',
                'invoiceable' => 42,
                'overtimeSpent' => 42,
                'invoiceableOvertime' => 42,
                'totalTimeSpent' => 42,
                'invoiceableTotalTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'summary' => [],
                'materials' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new TimeCardGetAllEmployeeTimeCardsCollectionRequest(status: 'test string', week: 'test string', type: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', employeeCd: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (TimeCardGetAllEmployeeTimeCardsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->approvalStatus->toBe('String value')
        ->week->toBeNull()
        ->employee->toBeNull()
        ->type->toBe('String value')
        ->origRefNbr->toBe('String value')
        ->timeSpent->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->invoiceable->toBe(42)
        ->overtimeSpent->toBe(42)
        ->invoiceableOvertime->toBe(42)
        ->totalTimeSpent->toBe(42)
        ->invoiceableTotalTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the timeCardSubmitTimeCardBytimeCardCd method in the TimeCard resource', function () {
    $mockClient = Saloon::fake([
        TimeCardSubmitTimeCardBytimeCardCdRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\SubmitTimeCardActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new TimeCardSubmitTimeCardBytimeCardCdRequest(timeCardCd: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardSubmitTimeCardBytimeCardCdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});

it('calls the timeCardSendTimeCardToApprovalBytimeCardCd method in the TimeCard resource', function () {
    $mockClient = Saloon::fake([
        TimeCardSendTimeCardToApprovalBytimeCardCdRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\SendTimeCardToApprovalActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new TimeCardSendTimeCardToApprovalBytimeCardCdRequest(timeCardCd: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardSendTimeCardToApprovalBytimeCardCdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});

it('calls the timeCardPutTimeCardOnHoldBytimeCardCd method in the TimeCard resource', function () {
    $mockClient = Saloon::fake([
        TimeCardPutTimeCardOnHoldBytimeCardCdRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\PutTimeCardOnHoldActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new TimeCardPutTimeCardOnHoldBytimeCardCdRequest(timeCardCd: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardPutTimeCardOnHoldBytimeCardCdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});
