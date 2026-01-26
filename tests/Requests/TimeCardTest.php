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
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the timeCardGetEmployeeTimeCardByreferenceNumber method in the TimeCard resource', function () {
    Saloon::fake([
        TimeCardGetEmployeeTimeCardByreferenceNumberRequest::class => MockResponse::make([
            'refNbr' => 'Mock value',
            'status' => 'Mock value',
            'approvalStatus' => 'Mock value',
            'week' => 'Mock value',
            'employee' => 'Mock value',
            'origRefNbr' => 'Mock value',
            'timeSpent' => '2025-11-22T10:40:04.065Z',
            'invoiceable' => 42,
            'overtimeSpent' => 42,
            'invoiceableOvertime' => 42,
            'totalTimeSpent' => 42,
            'invoiceableTotalTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'summary' => [],
            'materials' => [],
            'approvalStatusText' => 'Mock value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new TimeCardGetEmployeeTimeCardByreferenceNumberRequest(
        referenceNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardGetEmployeeTimeCardByreferenceNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->refNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->approvalStatus->toBe('Mock value')
        ->week->toBe('Mock value')
        ->employee->toBe('Mock value')
        ->origRefNbr->toBe('Mock value')
        ->timeSpent->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->invoiceable->toBe(42)
        ->overtimeSpent->toBe(42)
        ->invoiceableOvertime->toBe(42)
        ->totalTimeSpent->toBe(42)
        ->invoiceableTotalTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the timeCardGetAllEmployeeTimeCardsCollection method in the TimeCard resource', function () {
    Saloon::fake([
        TimeCardGetAllEmployeeTimeCardsCollectionRequest::class => MockResponse::make([
            0 => [
                'refNbr' => 'Mock value',
                'status' => 'Mock value',
                'approvalStatus' => 'Mock value',
                'week' => 'Mock value',
                'employee' => 'Mock value',
                'origRefNbr' => 'Mock value',
                'timeSpent' => '2025-11-22T10:40:04.065Z',
                'invoiceable' => 42,
                'overtimeSpent' => 42,
                'invoiceableOvertime' => 42,
                'totalTimeSpent' => 42,
                'invoiceableTotalTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'summary' => [],
                'materials' => [],
                'approvalStatusText' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'refNbr' => 'Mock value',
                'status' => 'Mock value',
                'approvalStatus' => 'Mock value',
                'week' => 'Mock value',
                'employee' => 'Mock value',
                'origRefNbr' => 'Mock value',
                'timeSpent' => '2025-11-22T10:40:04.065Z',
                'invoiceable' => 42,
                'overtimeSpent' => 42,
                'invoiceableOvertime' => 42,
                'totalTimeSpent' => 42,
                'invoiceableTotalTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'summary' => [],
                'materials' => [],
                'approvalStatusText' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new TimeCardGetAllEmployeeTimeCardsCollectionRequest(status: 'test string', week: 'test string', type: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', employeeCd: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (TimeCardGetAllEmployeeTimeCardsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->refNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->approvalStatus->toBe('Mock value')
        ->week->toBe('Mock value')
        ->employee->toBe('Mock value')
        ->origRefNbr->toBe('Mock value')
        ->timeSpent->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->invoiceable->toBe(42)
        ->overtimeSpent->toBe(42)
        ->invoiceableOvertime->toBe(42)
        ->totalTimeSpent->toBe(42)
        ->invoiceableTotalTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
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

    $request = new TimeCardSubmitTimeCardBytimeCardCdRequest(timeCardCdId: 'time_card_cd_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardSubmitTimeCardBytimeCardCdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('timeCards')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

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

    $request = new TimeCardSendTimeCardToApprovalBytimeCardCdRequest(timeCardCdId: 'time_card_cd_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardSendTimeCardToApprovalBytimeCardCdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('timeCards')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

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

    $request = new TimeCardPutTimeCardOnHoldBytimeCardCdRequest(timeCardCdId: 'time_card_cd_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(TimeCardPutTimeCardOnHoldBytimeCardCdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('timeCards')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
