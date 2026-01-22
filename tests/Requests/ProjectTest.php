<?php

// auto-generated

use Pionect\VismaSdk\Requests\Project\ProjectChangeProjectIdactionByinternalIdRequest;
use Pionect\VismaSdk\Requests\Project\ProjectGetByinternalIdRequest;
use Pionect\VismaSdk\Requests\Project\ProjectGetByprojectIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectGetByprojectId method in the Project resource', function () {
    Saloon::fake([
        ProjectGetByprojectIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'projects',
                'id' => 'mock-id-123',
                'attributes' => [
                    'name' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new ProjectGetByprojectIdRequest(
        projectIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectGetByprojectIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('Mock value');
});

it('calls the projectGetByinternalId method in the Project resource', function () {
    Saloon::fake([
        ProjectGetByinternalIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'projects',
                'id' => 'mock-id-123',
                'attributes' => [
                    'name' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new ProjectGetByinternalIdRequest(
        internalIdId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectGetByinternalIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('Mock value');
});

it('calls the projectChangeProjectIdactionByinternalId method in the Project resource', function () {
    $mockClient = Saloon::fake([
        ProjectChangeProjectIdactionByinternalIdRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ChangeProjectIdActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new ProjectChangeProjectIdactionByinternalIdRequest(internalId: 42, data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectChangeProjectIdactionByinternalIdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('projects')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
