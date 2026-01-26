<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\ProjectTransaction\ProjectTransactionGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\ProjectTransaction\ProjectTransactionGetByrefNbrRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the projectTransactionGetByrefNbr method in the ProjectTransaction resource', function () {
    Saloon::fake([
        ProjectTransactionGetByrefNbrRequest::class => MockResponse::make([
            'refNbr' => 'Mock value',
            'description' => 'Mock value',
            'origDocNbr' => 'Mock value',
            'status' => 'Mock value',
            'module' => 'Mock value',
            'origDocType' => 'Mock value',
            'note' => 'Mock value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'lines' => [],
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
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
        ->refNbr->toBe('Mock value')
        ->description->toBe('Mock value')
        ->origDocNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->module->toBe('Mock value')
        ->origDocType->toBe('Mock value')
        ->note->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the projectTransactionGetAllCollection method in the ProjectTransaction resource', function () {
    Saloon::fake([
        ProjectTransactionGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'refNbr' => 'Mock value',
                'description' => 'Mock value',
                'origDocNbr' => 'Mock value',
                'status' => 'Mock value',
                'module' => 'Mock value',
                'origDocType' => 'Mock value',
                'note' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'lines' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'refNbr' => 'Mock value',
                'description' => 'Mock value',
                'origDocNbr' => 'Mock value',
                'status' => 'Mock value',
                'module' => 'Mock value',
                'origDocType' => 'Mock value',
                'note' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'lines' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new ProjectTransactionGetAllCollectionRequest(module: 'test string', status: 'test string', project: 'test string', projectTask: 'test string', billable: true, branch: 'test string', date: 'test string', fromPeriod: 'test string', toPeriod: 'test string', numberToRead: 123, skipRecords: 123, expandNote: true, greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ProjectTransactionGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->refNbr->toBe('Mock value')
        ->description->toBe('Mock value')
        ->origDocNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->module->toBe('Mock value')
        ->origDocType->toBe('Mock value')
        ->note->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
