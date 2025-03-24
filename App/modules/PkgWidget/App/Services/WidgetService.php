<?php

namespace Modules\PkgWidget\App\Services;

use Modules\PkgWidget\Models\Apprenant;

class WidgetService
{
    public function getNombreApprenant()
    {
        $count = Apprenant::count();
        return [
            'title' => 'Number of Learners',
            'value' => $count
        ];
    }

    public function getApprenantsActifs()
    {
        $activeApprenants = Apprenant::where('is_active', true)->pluck('name')->toArray();
        return [
            'title' => 'Active Learners',
            'list' => $activeApprenants,
            'total' => count($activeApprenants)
        ];
    }
}