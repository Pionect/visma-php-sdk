<?php

// Generated 2026-01-30 14:10:14

use Pionect\VismaSdk\Requests\ProjectTransaction\ProjectTransactionGetAllRequest;
use Pionect\VismaSdk\Requests\ProjectTransaction\ProjectTransactionGetByrefNbrRequest;
use Pionect\VismaSdk\Requests\ProjectTransaction\ProjectTransactionPostRequest;
use Pionect\VismaSdk\Requests\ProjectTransaction\ProjectTransactionPutByrefNbrRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectTransactionGetByrefNbrRequest method in the ProjectTransaction resource', function () {
    Saloon::fake([
        ProjectTransactionGetByrefNbrRequest::class => MockResponse::make([
            'refNbr' => 'String value',
            'description' => 'String value',
            'origDocNbr' => 'String value',
            'status' => 'String value',
            'module' => 'String value',
            'origDocType' => 'String value',
            'note' => 'String value',
            'timeStamp' => 'String value',
            'lines' => [],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new ProjectTransactionGetByrefNbrRequest(
        refNbr: 'test string',
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
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the projectTransactionPutByrefNbrRequest method in the ProjectTransaction resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        ProjectTransactionPutByrefNbrRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ProjectTransactionPutByrefNbrRequest(
        refNbr: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectTransactionPutByrefNbrRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the projectTransactionGetAllRequest method in the ProjectTransaction resource', function () {
    Saloon::fake([
        ProjectTransactionGetAllRequest::class => MockResponse::make([
            0 => [
                'refNbr' => 'String value',
                'description' => 'String value',
                'origDocNbr' => 'String value',
                'status' => 'String value',
                'module' => 'String value',
                'origDocType' => 'String value',
                'note' => 'String value',
                'timeStamp' => 'String value',
                'lines' => [],
                'errorInfo' => 'String value',
            ],
            1 => [
                'refNbr' => 'String value',
                'description' => 'String value',
                'origDocNbr' => 'String value',
                'status' => 'String value',
                'module' => 'String value',
                'origDocType' => 'String value',
                'note' => 'String value',
                'timeStamp' => 'String value',
                'lines' => [],
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new ProjectTransactionGetAllRequest(
        module: 'test string',
        status: 'test string',
        project: 'test string',
        projectTask: 'test string',
        billable: true,
        branch: 'test string',
        date: 'test string',
        fromPeriod: 'test string',
        toPeriod: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        expandNote: true,
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectTransactionGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->refNbr->toBe('String value')
        ->description->toBe('String value')
        ->origDocNbr->toBe('String value')
        ->status->toBe('String value')
        ->module->toBe('String value')
        ->origDocType->toBe('String value')
        ->note->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the projectTransactionPostRequest method in the ProjectTransaction resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        ProjectTransactionPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ProjectTransactionPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectTransactionPostRequest::class);

    expect($response->status())->toBe(201);
});
