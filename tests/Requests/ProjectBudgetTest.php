<?php

// auto-generated

use Pionect\VismaSdk\Requests\ProjectBudget\ProjectBudgetGetAllCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the projectBudgetGetAllCollection method in the ProjectBudget resource', function () {
    Saloon::fake([
        ProjectBudgetGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'projectId' => 'mock-id-123',
                'projectTaskId' => 'mock-id-123',
                'accountGroupId' => 'mock-id-123',
                'inventoryNumber' => 'String value',
                'description' => 'String value',
                'uom' => 'String value',
                'rate' => 3.14,
                'originalBudgetQty' => 3.14,
                'originalBudgetAmount' => 3.14,
                'revisedBudgetQty' => 3.14,
                'revisedBudgetAmount' => 3.14,
                'actualQty' => 3.14,
                'actualAmount' => 3.14,
                'committedQty' => 3.14,
                'committedAmount' => 3.14,
                'committedOpenQty' => 3.14,
                'committedOpenAmount' => 3.14,
                'committedReceivedQty' => 3.14,
                'committedInvoicedQty' => 3.14,
                'committedInvoicedAmount' => 3.14,
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'projectId' => 'mock-id-123',
                'projectTaskId' => 'mock-id-123',
                'accountGroupId' => 'mock-id-123',
                'inventoryNumber' => 'String value',
                'description' => 'String value',
                'uom' => 'String value',
                'rate' => 3.14,
                'originalBudgetQty' => 3.14,
                'originalBudgetAmount' => 3.14,
                'revisedBudgetQty' => 3.14,
                'revisedBudgetAmount' => 3.14,
                'actualQty' => 3.14,
                'actualAmount' => 3.14,
                'committedQty' => 3.14,
                'committedAmount' => 3.14,
                'committedOpenQty' => 3.14,
                'committedOpenAmount' => 3.14,
                'committedReceivedQty' => 3.14,
                'committedInvoicedQty' => 3.14,
                'committedInvoicedAmount' => 3.14,
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new ProjectBudgetGetAllCollectionRequest(project: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (ProjectBudgetGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->projectId->toBe('mock-id-123')
        ->projectTaskId->toBe('mock-id-123')
        ->accountGroupId->toBe('mock-id-123')
        ->inventoryNumber->toBe('String value')
        ->description->toBe('String value')
        ->uom->toBe('String value')
        ->rate->toBe(3.14)
        ->originalBudgetQty->toBe(3.14)
        ->originalBudgetAmount->toBe(3.14)
        ->revisedBudgetQty->toBe(3.14)
        ->revisedBudgetAmount->toBe(3.14)
        ->actualQty->toBe(3.14)
        ->actualAmount->toBe(3.14)
        ->committedQty->toBe(3.14)
        ->committedAmount->toBe(3.14)
        ->committedOpenQty->toBe(3.14)
        ->committedOpenAmount->toBe(3.14)
        ->committedReceivedQty->toBe(3.14)
        ->committedInvoicedQty->toBe(3.14)
        ->committedInvoicedAmount->toBe(3.14)
        ->errorInfo->toBe('String value');
});
