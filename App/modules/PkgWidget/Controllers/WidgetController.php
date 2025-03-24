<?php

namespace Modules\PkgWidget\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\PkgWidget\App\Services\WidgetService;

class WidgetController extends Controller
{
    protected $widgetService;

    public function __construct(WidgetService $widgetService)
    {
        $this->widgetService = $widgetService;
    }
}
