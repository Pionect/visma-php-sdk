<?php

// auto-generated

use Pionect\VismaSdk\Requests\ProjectTask\ProjectTaskGetTaskByinternalIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectTaskGetTaskByinternalId method in the ProjectTask resource', function () {
    Saloon::fake([
        ProjectTaskGetTaskByinternalIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'projectTasks',
                'id' => 'mock-id-123',
                'attributes' => [
                    'name' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new ProjectTaskGetTaskByinternalIdRequest(
        internalIdId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectTaskGetTaskByinternalIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('Mock value');
});
