<?php

namespace Pionect\VismaSdk\Enums;

enum ShipmentUpdateModeOfTrasportEnum: string
{
    case UNKNOWN = 'Unknown';
    case BY_SEA = 'BySea';
    case BY_RAIL = 'ByRail';
    case BY_ROAD = 'ByRoad';
    case BY_AERO_PLANE = 'ByAeroPlane';
    case CONSIGNMENTS_BY_POSTS = 'ConsignmentsByPosts';
    case FIXED_INSTALLATIONS = 'FixedInstallations';
    case INLAND_WATERWAY = 'InlandWaterway';
}
