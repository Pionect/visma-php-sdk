<?php

// auto-generated

use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetAllActiveLanguagesCollectionRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetInventoryTranslationsByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the multilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIso method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class => MockResponse::make([
            'languageIso' => 'String value',
            'translation' => 'String value',
            'isTranslated' => true,
        ], 200),
    ]);

    $request = new MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest(
        inventoryNumber: 'test string',
        languageIso: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->languageIso->toBe('String value')
        ->translation->toBe('String value')
        ->isTranslated->toBeTrue();
});

it('calls the multilanguageGetInventoryTranslationsByinventoryNumber method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetInventoryTranslationsByinventoryNumberRequest::class => MockResponse::make([
            'languageIso' => 'String value',
            'translation' => 'String value',
            'isTranslated' => true,
        ], 200),
    ]);

    $request = new MultilanguageGetInventoryTranslationsByinventoryNumberRequest(
        inventoryNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguageGetInventoryTranslationsByinventoryNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->languageIso->toBe('String value')
        ->translation->toBe('String value')
        ->isTranslated->toBeTrue();
});

it('calls the multilanguageGetAllActiveLanguagesCollection method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetAllActiveLanguagesCollectionRequest::class => MockResponse::make([
            0 => [
                'isDefault' => true,
                'languageIso' => 'String value',
                'nativeName' => 'String value',
                'isActive' => true,
            ],
            1 => [
                'isDefault' => true,
                'languageIso' => 'String value',
                'nativeName' => 'String value',
                'isActive' => true,
            ],
        ], 200),
    ]);

    $request = (new MultilanguageGetAllActiveLanguagesCollectionRequest);

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (MultilanguageGetAllActiveLanguagesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->isDefault->toBeTrue()
        ->languageIso->toBe('String value')
        ->nativeName->toBe('String value')
        ->isActive->toBeTrue();
});
