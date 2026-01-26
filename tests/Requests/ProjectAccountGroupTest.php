<?php

// auto-generated

use Pionect\VismaSdk\Requests\ProjectAccountGroup\ProjectAccountGroupGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\ProjectAccountGroup\ProjectAccountGroupGetByaccountGroupIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the projectAccountGroupGetAllCollection method in the ProjectAccountGroup resource', function () {
    Saloon::fake([
        ProjectAccountGroupGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'accountGroupId' => 'mock-id-123',
                'active' => true,
                'description' => 'Mock value',
                'attributes' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'accountGroupId' => 'mock-id-123',
                'active' => true,
                'description' => 'Mock value',
                'attributes' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new ProjectAccountGroupGetAllCollectionRequest(expandAttribute: true, greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ProjectAccountGroupGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->accountGroupId->toBe('mock-id-123')
        ->active->toBeTrue()
        ->description->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the projectAccountGroupGetByaccountGroupId method in the ProjectAccountGroup resource', function () {
    Saloon::fake([
        ProjectAccountGroupGetByaccountGroupIdRequest::class => MockResponse::make([
            'accountGroupId' => 'mock-id-123',
            'active' => true,
            'description' => 'Mock value',
            'attributes' => [],
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new ProjectAccountGroupGetByaccountGroupIdRequest(
        accountGroupIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectAccountGroupGetByaccountGroupIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->accountGroupId->toBe('mock-id-123')
        ->active->toBeTrue()
        ->description->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
