<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Supplementary measure unit > The supplementary measure unit to which the
 * conversion will be made for Intrastat.
 */
enum UnitOfMeasureSupplementaryMeasureUnitEnum: string
{
    case NONE = 'None';
    case CARATS = 'Carats';
    case NUMBER_OF_CELLS = 'NumberOfCells';
    case CARRYING_CAPACITY_TONS = 'CarryingCapacityTons';
    case GRAM = 'Gram';
    case GRAM_FISSILE_ISOTYPES = 'GramFissileIsotypes';
    case KILOGRAM = 'Kilogram';
    case KILOGRAM_CHOLINE_CHLORIDE = 'KilogramCholineChloride';
    case KILOGRAM_HYDROGEN_PEROXIDE = 'KilogramHydrogenPeroxide';
    case KILOGRAM_POTASSIUM_OXIDE = 'KilogramPotassiumOxide';
    case KILOGRAM_POTASSIUM_HYDROXIDE = 'KilogramPotassiumHydroxide';
    case KILOGRAM_METHYLAMINES = 'KilogramMethylamines';
    case KILOGRAM_DRAINED_NET_WEIGHT = 'KilogramDrainedNetWeight';
    case KILOGRAM_SUBSTANCE90DRY = 'KilogramSubstance90Dry';
    case KILOGRAM_NITROGEN = 'KilogramNitrogen';
    case KILOGRAM_SODIUM_HYDROXIDE = 'KilogramSodiumHydroxide';
    case KILOGRAM_DIPHOSPHORUS_PENTAOXIDE = 'KilogramDiphosphorusPentaoxide';
    case KILOGRAM_URANIUM = 'KilogramUranium';
    case NUMBER_OF_ITEMS = 'NumberOfItems';
    case NUMBER_OF_PAIRS = 'NumberOfPairs';
    case ITEMS100 = 'Items100';
    case ITEMS1000 = 'Items1000';
    case KILOWATT_HOURS1000 = 'KilowattHours1000';
    case LITRE = 'Litre';
    case LITRE_PURE_ALCO = 'LitrePureAlco';
    case LITRES1000 = 'Litres1000';
    case METER = 'Meter';
    case SQUARE_METER = 'SquareMeter';
    case CUBIC_METER = 'CubicMeter';
    case CUBIC_METERS1000 = 'CubicMeters1000';
    case TERAJOULE = 'Terajoule';
}
