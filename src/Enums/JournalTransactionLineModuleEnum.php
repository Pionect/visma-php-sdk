<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The workspace where the batch originates. See module in the Top part >
 * Workspace
 */
enum JournalTransactionLineModuleEnum: string
{
    case MODULE_GL = 'ModuleGL';
    case MODULE_AP = 'ModuleAP';
    case MODULE_AR = 'ModuleAR';
    case MODULE_CA = 'ModuleCA';
    case MODULE_CM = 'ModuleCM';
    case MODULE_IN = 'ModuleIN';
    case MODULE_SO = 'ModuleSO';
    case MODULE_PO = 'ModulePO';
    case MODULE_DR = 'ModuleDR';
    case MODULE_FA = 'ModuleFA';
    case MODULE_EP = 'ModuleEP';
    case MODULE_PM = 'ModulePM';
    case MODULE_TX = 'ModuleTX';
    case MODULE_CR = 'ModuleCR';
}
