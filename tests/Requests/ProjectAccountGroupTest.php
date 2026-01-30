<?php

use Pionect\VismaSdk\Requests\ProjectAccountGroup\ProjectAccountGroupGetAllRequest;
use Pionect\VismaSdk\Requests\ProjectAccountGroup\ProjectAccountGroupGetByaccountGroupIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectAccountGroupGetAllRequest method in the ProjectAccountGroup resource', function () {
    Saloon::fake([
        ProjectAccountGroupGetAllRequest::class => MockResponse::make([
            0 => [
                'accountGroupId' => 'mock-id-123',
                'active' => true,
                'description' => 'String value',
                'attributes' => [],
                'errorInfo' => 'String value',
            ],
            1 => [
                'accountGroupId' => 'mock-id-123',
                'active' => true,
                'description' => 'String value',
                'attributes' => [],
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new ProjectAccountGroupGetAllRequest(
        expandAttribute: true,
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectAccountGroupGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->accountGroupId->toBe('mock-id-123')
        ->active->toBe(true)
        ->description->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the projectAccountGroupGetByaccountGroupIdRequest method in the ProjectAccountGroup resource', function () {
    Saloon::fake([
        ProjectAccountGroupGetByaccountGroupIdRequest::class => MockResponse::make([
            'accountGroupId' => 'mock-id-123',
            'active' => true,
            'description' => 'String value',
            'attributes' => [],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new ProjectAccountGroupGetByaccountGroupIdRequest(
        accountGroupId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectAccountGroupGetByaccountGroupIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->accountGroupId->toBe('mock-id-123')
        ->active->toBe(true)
        ->description->toBe('String value')
        ->errorInfo->toBe('String value');
});
