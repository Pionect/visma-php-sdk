<?php

// Generated 2026-01-30 14:10:14
use Pionect\VismaSdk\Dto\ProjectBudgetUpdateDto;
use Pionect\VismaSdk\Requests\ProjectBudget\ProjectBudgetGetAllRequest;
use Pionect\VismaSdk\Requests\ProjectBudget\ProjectBudgetPostRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectBudgetGetAllRequest method in the ProjectBudget resource', function () {
    Saloon::fake([
        ProjectBudgetGetAllRequest::class => MockResponse::make([
            0 => [
                'projectId' => 'mock-id-123',
                'projectTaskId' => 'mock-id-123',
                'accountGroupId' => 'mock-id-123',
                'inventoryNumber' => 'String value',
                'description' => 'String value',
                'uom' => 'String value',
                'rate' => 42,
                'originalBudgetQty' => 42,
                'originalBudgetAmount' => 42,
                'revisedBudgetQty' => 42,
                'revisedBudgetAmount' => 42,
                'actualQty' => 42,
                'actualAmount' => 42,
                'type' => 'String value',
                'committedQty' => 42,
                'committedAmount' => 42,
                'committedOpenQty' => 42,
                'committedOpenAmount' => 42,
                'committedReceivedQty' => 42,
                'committedInvoicedQty' => 42,
                'committedInvoicedAmount' => 42,
                'errorInfo' => 'String value',
            ],
            1 => [
                'projectId' => 'mock-id-123',
                'projectTaskId' => 'mock-id-123',
                'accountGroupId' => 'mock-id-123',
                'inventoryNumber' => 'String value',
                'description' => 'String value',
                'uom' => 'String value',
                'rate' => 42,
                'originalBudgetQty' => 42,
                'originalBudgetAmount' => 42,
                'revisedBudgetQty' => 42,
                'revisedBudgetAmount' => 42,
                'actualQty' => 42,
                'actualAmount' => 42,
                'type' => 'String value',
                'committedQty' => 42,
                'committedAmount' => 42,
                'committedOpenQty' => 42,
                'committedOpenAmount' => 42,
                'committedReceivedQty' => 42,
                'committedInvoicedQty' => 42,
                'committedInvoicedAmount' => 42,
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new ProjectBudgetGetAllRequest(
        project: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectBudgetGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->projectId->toBe('mock-id-123')
        ->projectTaskId->toBe('mock-id-123')
        ->accountGroupId->toBe('mock-id-123')
        ->inventoryNumber->toBe('String value')
        ->description->toBe('String value')
        ->uom->toBe('String value')
        ->rate->toBe(42)
        ->originalBudgetQty->toBe(42)
        ->originalBudgetAmount->toBe(42)
        ->revisedBudgetQty->toBe(42)
        ->revisedBudgetAmount->toBe(42)
        ->actualQty->toBe(42)
        ->actualAmount->toBe(42)
        ->type->toBe('String value')
        ->committedQty->toBe(42)
        ->committedAmount->toBe(42)
        ->committedOpenQty->toBe(42)
        ->committedOpenAmount->toBe(42)
        ->committedReceivedQty->toBe(42)
        ->committedInvoicedQty->toBe(42)
        ->committedInvoicedAmount->toBe(42)
        ->errorInfo->toBe('String value');
});

it('calls the projectBudgetPostRequest method in the ProjectBudget resource', function () {
    $bodyData = new ProjectBudgetUpdateDto(
        projectId: 'mock-id-123',
        projectTaskId: 'mock-id-123',
        accountGroupId: 'mock-id-123',
        inventoryNumber: 'String value',
        description: 'String value',
        uom: 'String value',
        rate: 42,
        originalBudgetQty: 42,
        originalBudgetAmount: 42,
        revisedBudgetQty: 42,
        revisedBudgetAmount: 42
    );

    Saloon::fake([
        ProjectBudgetPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ProjectBudgetPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ProjectBudgetPostRequest::class);

    expect($response->status())->toBe(201);
});
