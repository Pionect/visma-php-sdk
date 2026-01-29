<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractGetAllCollectionRequest;
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
            'contractId' => 'mock-id-123',
            'contractTemplate' => null,
            'status' => 'String value',
            'customer' => null,
            'location' => null,
            'description' => 'String value',
            'balance' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'summary' => null,
            'details' => null,
            'attributes' => [],
        ], 200),
    ]);

    $request = new CustomerContractGetCustomerContractBycontractIdRequest(
        contractId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractGetCustomerContractBycontractIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->contractId->toBe('mock-id-123')
        ->contractTemplate->toBeNull()
        ->status->toBe('String value')
        ->customer->toBeNull()
        ->location->toBeNull()
        ->description->toBe('String value')
        ->balance->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->summary->toBeNull()
        ->details->toBeNull();
});

it('calls the customerContractGetAllCollection method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'contractId' => 'mock-id-123',
                'contractTemplate' => null,
                'status' => 'String value',
                'customer' => null,
                'location' => null,
                'description' => 'String value',
                'balance' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'summary' => null,
                'details' => null,
                'attributes' => [],
            ],
            1 => [
                'contractId' => 'mock-id-123',
                'contractTemplate' => null,
                'status' => 'String value',
                'customer' => null,
                'location' => null,
                'description' => 'String value',
                'balance' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'summary' => null,
                'details' => null,
                'attributes' => [],
            ],
        ], 200),
    ]);

    $request = (new CustomerContractGetAllCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', contractTemplate: 'test string', status: 'test string', customer: 'test string', expandSummary: true, expandDetails: true, attributes: 'test string', expandAttributes: true));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CustomerContractGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->contractId->toBe('mock-id-123')
        ->contractTemplate->toBeNull()
        ->status->toBe('String value')
        ->customer->toBeNull()
        ->location->toBeNull()
        ->description->toBe('String value')
        ->balance->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->summary->toBeNull()
        ->details->toBeNull();
});

it('calls the customerContractGetCustomerContractSummaryBycontractId method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetCustomerContractSummaryBycontractIdRequest::class => MockResponse::make([
            'setupDate' => '2025-11-22T10:40:04.065Z',
            'activationDate' => '2025-11-22T10:40:04.065Z',
            'expirationDate' => '2025-11-22T10:40:04.065Z',
            'terminationDate' => '2025-11-22T10:40:04.065Z',
            'massRenewal' => true,
            'renewalPoint' => 42,
            'gracePeriod' => 42,
            'currency' => 'String value',
            'invoicingScheduleStartsOn' => '2025-11-22T10:40:04.065Z',
            'invoicingPeriod' => 'String value',
            'lastInvoicingDate' => '2025-11-22T10:40:04.065Z',
            'nextInvoicingDate' => '2025-11-22T10:40:04.065Z',
            'invoiceTo' => 'String value',
            'invoiceAccount' => null,
            'invoiceLocation' => null,
            'owner' => null,
            'salesPerson' => null,
            'caseCountItem' => null,
        ], 200),
    ]);

    $request = new CustomerContractGetCustomerContractSummaryBycontractIdRequest(
        contractId: 'test string',
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
        ->massRenewal->toBeTrue()
        ->renewalPoint->toBe(42)
        ->gracePeriod->toBe(42)
        ->currency->toBe('String value')
        ->invoicingScheduleStartsOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->invoicingPeriod->toBe('String value')
        ->lastInvoicingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->nextInvoicingDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->invoiceTo->toBe('String value')
        ->invoiceAccount->toBeNull()
        ->invoiceLocation->toBeNull()
        ->owner->toBeNull()
        ->salesPerson->toBeNull()
        ->caseCountItem->toBeNull();
});

it('calls the customerContractGetCustomerContractDetailsBycontractId method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetCustomerContractDetailsBycontractIdRequest::class => MockResponse::make([
            'effectiveFrom' => '2025-11-22T10:40:04.065Z',
            'promoCode' => null,
            'pendingSetup' => 3.14,
            'pendingRecurring' => 3.14,
            'pendingRenewal' => 3.14,
            'totalPending' => 3.14,
            'currentSetup' => 3.14,
            'currentRecurring' => 3.14,
            'currentRenewal' => 3.14,
            'lines' => [],
        ], 200),
    ]);

    $request = new CustomerContractGetCustomerContractDetailsBycontractIdRequest(
        contractId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractGetCustomerContractDetailsBycontractIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->effectiveFrom->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->promoCode->toBeNull()
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
            'recurringTotal' => 3.14,
            'extraUsageTotal' => 3.14,
            'totalDue' => 3.14,
            'lines' => [],
        ], 200),
    ]);

    $request = new CustomerContractGetCustomerContractRecurringSummaryBycontractIdRequest(
        contractId: 'test string',
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
