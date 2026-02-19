<?php

use Pionect\VismaSdk\Dto\CustomerContractUpdateDto;
use Pionect\VismaSdk\Enums\CustomerContractStatusEnum;
use Pionect\VismaSdk\Enums\CustomerContractSummaryInvoiceToEnum;
use Pionect\VismaSdk\Enums\CustomerContractSummaryInvoicingPeriodEnum;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractActivateContractBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractActivateUpgradeBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractCreateCustomerContractRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractGetAllRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractGetCustomerContractBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractGetCustomerContractDetailsBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractGetCustomerContractRecurringSummaryBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractGetCustomerContractSummaryBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractPutBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractSetupAndActivateContractBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractSetupContractBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractTerminateContractBycontractIdRequest;
use Pionect\VismaSdk\Requests\CustomerContract\CustomerContractUpgradeContractBycontractIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerContractGetCustomerContractBycontractIdRequest method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetCustomerContractBycontractIdRequest::class => MockResponse::make([
            'contractId' => 'mock-id-123',
            'contractTemplate' => [
                'description' => 'String value',
            ],
            'status' => 'Draft',
            'customer' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'location' => [
                'description' => 'String value',
            ],
            'description' => 'String value',
            'balance' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'summary' => [
                'setupDate' => '2025-11-22T10:40:04+00:00',
                'activationDate' => '2025-11-22T10:40:04+00:00',
                'expirationDate' => '2025-11-22T10:40:04+00:00',
                'terminationDate' => '2025-11-22T10:40:04+00:00',
                'massRenewal' => true,
                'renewalPoint' => 42,
                'gracePeriod' => 42,
                'currency' => 'String value',
                'invoicingScheduleStartsOn' => '2025-11-22T10:40:04+00:00',
                'invoicingPeriod' => 'Statement',
                'lastInvoicingDate' => '2025-11-22T10:40:04+00:00',
                'nextInvoicingDate' => '2025-11-22T10:40:04+00:00',
                'invoiceTo' => 'ParentAccount',
                'invoiceAccount' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'invoiceLocation' => [
                    'description' => 'String value',
                ],
                'owner' => [
                    'internalId' => 'mock-id-123',
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'salesPerson' => [
                    'description' => 'String value',
                ],
                'caseCountItem' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
            ],
            'details' => [
                'effectiveFrom' => '2025-11-22T10:40:04+00:00',
                'promoCode' => [
                    'description' => 'String value',
                ],
                'pendingSetup' => 42,
                'pendingRecurring' => 42,
                'pendingRenewal' => 42,
                'totalPending' => 42,
                'currentSetup' => 42,
                'currentRecurring' => 42,
                'currentRenewal' => 42,
                'lines' => [],
            ],
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
        ->contractTemplate->description->toBe('String value')
        ->status->toEqual(CustomerContractStatusEnum::DRAFT)
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->location->description->toBe('String value')
        ->description->toBe('String value')
        ->balance->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->setupDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->activationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->expirationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->terminationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->massRenewal->toBe(true)
        ->summary->renewalPoint->toBe(42)
        ->summary->gracePeriod->toBe(42)
        ->summary->currency->toBe('String value')
        ->summary->invoicingScheduleStartsOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->invoicingPeriod->toEqual(CustomerContractSummaryInvoicingPeriodEnum::STATEMENT)
        ->summary->lastInvoicingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->nextInvoicingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->invoiceTo->toEqual(CustomerContractSummaryInvoiceToEnum::PARENT_ACCOUNT)
        ->summary->invoiceAccount->number->toBe('String value')
        ->summary->invoiceAccount->name->toBe('String value')
        ->summary->invoiceLocation->description->toBe('String value')
        ->summary->owner->internalId->toBe('mock-id-123')
        ->summary->owner->number->toBe('String value')
        ->summary->owner->name->toBe('String value')
        ->summary->salesPerson->description->toBe('String value')
        ->summary->caseCountItem->number->toBe('String value')
        ->summary->caseCountItem->description->toBe('String value')
        ->details->effectiveFrom->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->details->promoCode->description->toBe('String value')
        ->details->pendingSetup->toBe(42)
        ->details->pendingRecurring->toBe(42)
        ->details->pendingRenewal->toBe(42)
        ->details->totalPending->toBe(42)
        ->details->currentSetup->toBe(42)
        ->details->currentRecurring->toBe(42)
        ->details->currentRenewal->toBe(42);
});

it('calls the customerContractPutBycontractIdRequest method in the CustomerContract resource', function () {
    $bodyData = new CustomerContractUpdateDto(
        contractId: 'mock-id-123',
        contractTemplate: 'String value',
        customer: 'String value',
        location: 'String value',
        description: 'String value',
        setupDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        activationDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        expirationDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        massRenewal: true,
        renewalPoint: 42,
        gracePeriod: 42,
        currency: 'String value',
        invoiceTo: CustomerContractSummaryInvoiceToEnum::PARENT_ACCOUNT,
        invoiceAccount: 'String value',
        invoiceLocation: 'String value',
        owner: 'String value',
        salesPerson: 'String value',
        details: [],
        attributeLines: []
    );

    Saloon::fake([
        CustomerContractPutBycontractIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerContractPutBycontractIdRequest(
        contractId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractPutBycontractIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerContractGetAllRequest method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetAllRequest::class => MockResponse::make([
            0 => [
                'contractId' => 'mock-id-123',
                'contractTemplate' => [
                    'description' => 'String value',
                ],
                'status' => 'Draft',
                'customer' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'location' => [
                    'description' => 'String value',
                ],
                'description' => 'String value',
                'balance' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'summary' => [
                    'setupDate' => '2025-11-22T10:40:04+00:00',
                    'activationDate' => '2025-11-22T10:40:04+00:00',
                    'expirationDate' => '2025-11-22T10:40:04+00:00',
                    'terminationDate' => '2025-11-22T10:40:04+00:00',
                    'massRenewal' => true,
                    'renewalPoint' => 42,
                    'gracePeriod' => 42,
                    'currency' => 'String value',
                    'invoicingScheduleStartsOn' => '2025-11-22T10:40:04+00:00',
                    'invoicingPeriod' => 'Statement',
                    'lastInvoicingDate' => '2025-11-22T10:40:04+00:00',
                    'nextInvoicingDate' => '2025-11-22T10:40:04+00:00',
                    'invoiceTo' => 'ParentAccount',
                    'invoiceAccount' => [
                        'number' => 'String value',
                        'name' => 'String value',
                    ],
                    'invoiceLocation' => [
                        'description' => 'String value',
                    ],
                    'owner' => [
                        'internalId' => 'mock-id-123',
                        'number' => 'String value',
                        'name' => 'String value',
                    ],
                    'salesPerson' => [
                        'description' => 'String value',
                    ],
                    'caseCountItem' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                ],
                'details' => [
                    'effectiveFrom' => '2025-11-22T10:40:04+00:00',
                    'promoCode' => [
                        'description' => 'String value',
                    ],
                    'pendingSetup' => 42,
                    'pendingRecurring' => 42,
                    'pendingRenewal' => 42,
                    'totalPending' => 42,
                    'currentSetup' => 42,
                    'currentRecurring' => 42,
                    'currentRenewal' => 42,
                    'lines' => [],
                ],
                'attributes' => [],
            ],
            1 => [
                'contractId' => 'mock-id-123',
                'contractTemplate' => [
                    'description' => 'String value',
                ],
                'status' => 'Draft',
                'customer' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'location' => [
                    'description' => 'String value',
                ],
                'description' => 'String value',
                'balance' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'summary' => [
                    'setupDate' => '2025-11-22T10:40:04+00:00',
                    'activationDate' => '2025-11-22T10:40:04+00:00',
                    'expirationDate' => '2025-11-22T10:40:04+00:00',
                    'terminationDate' => '2025-11-22T10:40:04+00:00',
                    'massRenewal' => true,
                    'renewalPoint' => 42,
                    'gracePeriod' => 42,
                    'currency' => 'String value',
                    'invoicingScheduleStartsOn' => '2025-11-22T10:40:04+00:00',
                    'invoicingPeriod' => 'Statement',
                    'lastInvoicingDate' => '2025-11-22T10:40:04+00:00',
                    'nextInvoicingDate' => '2025-11-22T10:40:04+00:00',
                    'invoiceTo' => 'ParentAccount',
                    'invoiceAccount' => [
                        'number' => 'String value',
                        'name' => 'String value',
                    ],
                    'invoiceLocation' => [
                        'description' => 'String value',
                    ],
                    'owner' => [
                        'internalId' => 'mock-id-123',
                        'number' => 'String value',
                        'name' => 'String value',
                    ],
                    'salesPerson' => [
                        'description' => 'String value',
                    ],
                    'caseCountItem' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                ],
                'details' => [
                    'effectiveFrom' => '2025-11-22T10:40:04+00:00',
                    'promoCode' => [
                        'description' => 'String value',
                    ],
                    'pendingSetup' => 42,
                    'pendingRecurring' => 42,
                    'pendingRenewal' => 42,
                    'totalPending' => 42,
                    'currentSetup' => 42,
                    'currentRecurring' => 42,
                    'currentRenewal' => 42,
                    'lines' => [],
                ],
                'attributes' => [],
            ],
        ], 200),
    ]);

    $request = new CustomerContractGetAllRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        contractTemplate: 'test string',
        status: 'test string',
        customer: 'test string',
        expandSummary: true,
        expandDetails: true,
        attributes: 'test string',
        expandAttributes: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->contractId->toBe('mock-id-123')
        ->contractTemplate->description->toBe('String value')
        ->status->toEqual(CustomerContractStatusEnum::DRAFT)
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->location->description->toBe('String value')
        ->description->toBe('String value')
        ->balance->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->setupDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->activationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->expirationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->terminationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->massRenewal->toBe(true)
        ->summary->renewalPoint->toBe(42)
        ->summary->gracePeriod->toBe(42)
        ->summary->currency->toBe('String value')
        ->summary->invoicingScheduleStartsOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->invoicingPeriod->toEqual(CustomerContractSummaryInvoicingPeriodEnum::STATEMENT)
        ->summary->lastInvoicingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->nextInvoicingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->summary->invoiceTo->toEqual(CustomerContractSummaryInvoiceToEnum::PARENT_ACCOUNT)
        ->summary->invoiceAccount->number->toBe('String value')
        ->summary->invoiceAccount->name->toBe('String value')
        ->summary->invoiceLocation->description->toBe('String value')
        ->summary->owner->internalId->toBe('mock-id-123')
        ->summary->owner->number->toBe('String value')
        ->summary->owner->name->toBe('String value')
        ->summary->salesPerson->description->toBe('String value')
        ->summary->caseCountItem->number->toBe('String value')
        ->summary->caseCountItem->description->toBe('String value')
        ->details->effectiveFrom->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->details->promoCode->description->toBe('String value')
        ->details->pendingSetup->toBe(42)
        ->details->pendingRecurring->toBe(42)
        ->details->pendingRenewal->toBe(42)
        ->details->totalPending->toBe(42)
        ->details->currentSetup->toBe(42)
        ->details->currentRecurring->toBe(42)
        ->details->currentRenewal->toBe(42);
});

it('calls the customerContractCreateCustomerContractRequest method in the CustomerContract resource', function () {
    $bodyData = new CustomerContractUpdateDto(
        contractId: 'mock-id-123',
        contractTemplate: 'String value',
        customer: 'String value',
        location: 'String value',
        description: 'String value',
        setupDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        activationDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        expirationDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        massRenewal: true,
        renewalPoint: 42,
        gracePeriod: 42,
        currency: 'String value',
        invoiceTo: CustomerContractSummaryInvoiceToEnum::PARENT_ACCOUNT,
        invoiceAccount: 'String value',
        invoiceLocation: 'String value',
        owner: 'String value',
        salesPerson: 'String value',
        details: [],
        attributeLines: []
    );

    Saloon::fake([
        CustomerContractCreateCustomerContractRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerContractCreateCustomerContractRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractCreateCustomerContractRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerContractGetCustomerContractSummaryBycontractIdRequest method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetCustomerContractSummaryBycontractIdRequest::class => MockResponse::make([
            'setupDate' => '2025-11-22T10:40:04+00:00',
            'activationDate' => '2025-11-22T10:40:04+00:00',
            'expirationDate' => '2025-11-22T10:40:04+00:00',
            'terminationDate' => '2025-11-22T10:40:04+00:00',
            'massRenewal' => true,
            'renewalPoint' => 42,
            'gracePeriod' => 42,
            'currency' => 'String value',
            'invoicingScheduleStartsOn' => '2025-11-22T10:40:04+00:00',
            'invoicingPeriod' => 'Statement',
            'lastInvoicingDate' => '2025-11-22T10:40:04+00:00',
            'nextInvoicingDate' => '2025-11-22T10:40:04+00:00',
            'invoiceTo' => 'ParentAccount',
            'invoiceAccount' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'invoiceLocation' => [
                'description' => 'String value',
            ],
            'owner' => [
                'internalId' => 'mock-id-123',
                'number' => 'String value',
                'name' => 'String value',
            ],
            'salesPerson' => [
                'description' => 'String value',
            ],
            'caseCountItem' => [
                'number' => 'String value',
                'description' => 'String value',
            ],
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
        ->setupDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->activationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->expirationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->terminationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->massRenewal->toBe(true)
        ->renewalPoint->toBe(42)
        ->gracePeriod->toBe(42)
        ->currency->toBe('String value')
        ->invoicingScheduleStartsOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->invoicingPeriod->toEqual(CustomerContractSummaryInvoicingPeriodEnum::STATEMENT)
        ->lastInvoicingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->nextInvoicingDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->invoiceTo->toEqual(CustomerContractSummaryInvoiceToEnum::PARENT_ACCOUNT)
        ->invoiceAccount->number->toBe('String value')
        ->invoiceAccount->name->toBe('String value')
        ->invoiceLocation->description->toBe('String value')
        ->owner->internalId->toBe('mock-id-123')
        ->owner->number->toBe('String value')
        ->owner->name->toBe('String value')
        ->salesPerson->description->toBe('String value')
        ->caseCountItem->number->toBe('String value')
        ->caseCountItem->description->toBe('String value');
});

it('calls the customerContractGetCustomerContractDetailsBycontractIdRequest method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetCustomerContractDetailsBycontractIdRequest::class => MockResponse::make([
            'effectiveFrom' => '2025-11-22T10:40:04+00:00',
            'promoCode' => [
                'description' => 'String value',
            ],
            'pendingSetup' => 42,
            'pendingRecurring' => 42,
            'pendingRenewal' => 42,
            'totalPending' => 42,
            'currentSetup' => 42,
            'currentRecurring' => 42,
            'currentRenewal' => 42,
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
        ->effectiveFrom->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->promoCode->description->toBe('String value')
        ->pendingSetup->toBe(42)
        ->pendingRecurring->toBe(42)
        ->pendingRenewal->toBe(42)
        ->totalPending->toBe(42)
        ->currentSetup->toBe(42)
        ->currentRecurring->toBe(42)
        ->currentRenewal->toBe(42);
});

it('calls the customerContractGetCustomerContractRecurringSummaryBycontractIdRequest method in the CustomerContract resource', function () {
    Saloon::fake([
        CustomerContractGetCustomerContractRecurringSummaryBycontractIdRequest::class => MockResponse::make([
            'recurringTotal' => 42,
            'extraUsageTotal' => 42,
            'totalDue' => 42,
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
        ->recurringTotal->toBe(42)
        ->extraUsageTotal->toBe(42)
        ->totalDue->toBe(42);
});

it('calls the customerContractSetupContractBycontractIdRequest method in the CustomerContract resource', function () {
    $bodyData = [];

    Saloon::fake([
        CustomerContractSetupContractBycontractIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerContractSetupContractBycontractIdRequest(
        contractId: 'test string',
        setupDate: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractSetupContractBycontractIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerContractActivateContractBycontractIdRequest method in the CustomerContract resource', function () {
    $bodyData = [];

    Saloon::fake([
        CustomerContractActivateContractBycontractIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerContractActivateContractBycontractIdRequest(
        contractId: 'test string',
        activationDate: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractActivateContractBycontractIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerContractSetupAndActivateContractBycontractIdRequest method in the CustomerContract resource', function () {
    $bodyData = [];

    Saloon::fake([
        CustomerContractSetupAndActivateContractBycontractIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerContractSetupAndActivateContractBycontractIdRequest(
        contractId: 'test string',
        activationDate: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractSetupAndActivateContractBycontractIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerContractTerminateContractBycontractIdRequest method in the CustomerContract resource', function () {
    $bodyData = [];

    Saloon::fake([
        CustomerContractTerminateContractBycontractIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerContractTerminateContractBycontractIdRequest(
        contractId: 'test string',
        terminationDate: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractTerminateContractBycontractIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerContractUpgradeContractBycontractIdRequest method in the CustomerContract resource', function () {
    $bodyData = [];

    Saloon::fake([
        CustomerContractUpgradeContractBycontractIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerContractUpgradeContractBycontractIdRequest(
        contractId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractUpgradeContractBycontractIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerContractActivateUpgradeBycontractIdRequest method in the CustomerContract resource', function () {
    $bodyData = [];

    Saloon::fake([
        CustomerContractActivateUpgradeBycontractIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerContractActivateUpgradeBycontractIdRequest(
        contractId: 'test string',
        activationDate: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerContractActivateUpgradeBycontractIdRequest::class);

    expect($response->status())->toBe(201);
});
