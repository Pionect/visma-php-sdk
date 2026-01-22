<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractGetCustomerContractBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractGetCustomerContractDetailsBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractGetCustomerContractRecurringSummaryBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractGetCustomerContractSummaryBycontractIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerContractGetCustomerContractBycontractId method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetCustomerContractBycontractIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customerContracts',
                'id' => 'mock-id-123',
                'attributes' => [
                    'name' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerContractGetCustomerContractBycontractIdRequest(
        contractIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractGetCustomerContractBycontractIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('Mock value');
});

it('calls the customerContractGetCustomerContractSummaryBycontractId method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetCustomerContractSummaryBycontractIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customerContracts',
                'id' => 'mock-id-123',
                'attributes' => [
                    'setupDate' => '2025-11-22T10:40:04.065Z',
                    'activationDate' => '2025-11-22T10:40:04.065Z',
                    'expirationDate' => '2025-11-22T10:40:04.065Z',
                    'terminationDate' => '2025-11-22T10:40:04.065Z',
                    'massRenewal' => true,
                    'renewalPoint' => 42,
                    'gracePeriod' => 42,
                    'currency' => 'Mock value',
                    'invoicingScheduleStartsOn' => '2025-11-22T10:40:04.065Z',
                    'invoicingPeriod' => 'Mock value',
                    'lastInvoicingDate' => '2025-11-22T10:40:04.065Z',
                    'nextInvoicingDate' => '2025-11-22T10:40:04.065Z',
                    'invoiceTo' => 'Mock value',
                    'invoiceAccount' => 'Mock value',
                    'invoiceLocation' => 'Mock value',
                    'owner' => 'Mock value',
                    'salesPerson' => 'Mock value',
                    'caseCountItem' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerContractGetCustomerContractSummaryBycontractIdRequest(
        contractIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractGetCustomerContractSummaryBycontractIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->setupDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->activationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->expirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->terminationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->massRenewal->toBe(true)
        ->renewalPoint->toBe(42)
        ->gracePeriod->toBe(42)
        ->currency->toBe('Mock value')
        ->invoicingScheduleStartsOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->invoicingPeriod->toBe('Mock value')
        ->lastInvoicingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->nextInvoicingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->invoiceTo->toBe('Mock value')
        ->invoiceAccount->toBe('Mock value')
        ->invoiceLocation->toBe('Mock value')
        ->owner->toBe('Mock value')
        ->salesPerson->toBe('Mock value')
        ->caseCountItem->toBe('Mock value');
});

it('calls the customerContractGetCustomerContractDetailsBycontractId method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetCustomerContractDetailsBycontractIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customerContracts',
                'id' => 'mock-id-123',
                'attributes' => [
                    'effectiveFrom' => '2025-11-22T10:40:04.065Z',
                    'promoCode' => 'Mock value',
                    'pendingSetup' => 3.14,
                    'pendingRecurring' => 3.14,
                    'pendingRenewal' => 3.14,
                    'totalPending' => 3.14,
                    'currentSetup' => 3.14,
                    'currentRecurring' => 3.14,
                    'currentRenewal' => 3.14,
                    'lines' => [],
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerContractGetCustomerContractDetailsBycontractIdRequest(
        contractIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractGetCustomerContractDetailsBycontractIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->effectiveFrom->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->promoCode->toBe('Mock value')
        ->pendingSetup->toBe(3.14)
        ->pendingRecurring->toBe(3.14)
        ->pendingRenewal->toBe(3.14)
        ->totalPending->toBe(3.14)
        ->currentSetup->toBe(3.14)
        ->currentRecurring->toBe(3.14)
        ->currentRenewal->toBe(3.14);
});

it('calls the customerContractGetCustomerContractRecurringSummaryBycontractId method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetCustomerContractRecurringSummaryBycontractIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customerContracts',
                'id' => 'mock-id-123',
                'attributes' => [
                    'recurringTotal' => 3.14,
                    'extraUsageTotal' => 3.14,
                    'totalDue' => 3.14,
                    'lines' => [],
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerContractGetCustomerContractRecurringSummaryBycontractIdRequest(
        contractIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractGetCustomerContractRecurringSummaryBycontractIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->recurringTotal->toBe(3.14)
        ->extraUsageTotal->toBe(3.14)
        ->totalDue->toBe(3.14);
});
