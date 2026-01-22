<?php

// auto-generated

use Pionect\VismaSdk\Requests\ProjectAccountGroup\ProjectAccountGroupGetByaccountGroupIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectAccountGroupGetByaccountGroupId method in the ProjectAccountGroup resource', function () {
    Saloon::fake([
        ProjectAccountGroupGetByaccountGroupIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'projectAccountGroups',
                'id' => 'mock-id-123',
                'attributes' => [
                    'name' => 'Mock value',
                ],
            ],
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
        ->name->toBe('Mock value');
});
