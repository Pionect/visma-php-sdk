<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\ProjectTransaction\ProjectTransactionGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\ProjectTransaction\ProjectTransactionGetByrefNbrRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectTransactionGetByrefNbr method in the ProjectTransaction resource', function () {
    Saloon::fake([
        ProjectTransactionGetByrefNbrRequest::class => MockResponse::make([
            'refNbr' => 'String value',
            'description' => 'String value',
            'origDocNbr' => 'String value',
            'status' => 'String value',
            'module' => 'String value',
            'origDocType' => 'String value',
            'note' => 'String value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'lines' => [],
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new ProjectTransactionGetByrefNbrRequest(
        refNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectTransactionGetByrefNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->refNbr->toBe('String value')
        ->description->toBe('String value')
        ->origDocNbr->toBe('String value')
        ->status->toBe('String value')
        ->module->toBe('String value')
        ->origDocType->toBe('String value')
        ->note->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the projectTransactionGetAllCollection method in the ProjectTransaction resource', function () {
    Saloon::fake([
        ProjectTransactionGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'refNbr' => 'String value',
                'description' => 'String value',
                'origDocNbr' => 'String value',
                'status' => 'String value',
                'module' => 'String value',
                'origDocType' => 'String value',
                'note' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'lines' => [],
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'refNbr' => 'String value',
                'description' => 'String value',
                'origDocNbr' => 'String value',
                'status' => 'String value',
                'module' => 'String value',
                'origDocType' => 'String value',
                'note' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'lines' => [],
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new ProjectTransactionGetAllCollectionRequest(module: 'test string', status: 'test string', project: 'test string', projectTask: 'test string', billable: true, branch: 'test string', date: 'test string', fromPeriod: 'test string', toPeriod: 'test string', numberToRead: 123, skipRecords: 123, expandNote: true, greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (ProjectTransactionGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->refNbr->toBe('String value')
        ->description->toBe('String value')
        ->origDocNbr->toBe('String value')
        ->status->toBe('String value')
        ->module->toBe('String value')
        ->origDocType->toBe('String value')
        ->note->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
