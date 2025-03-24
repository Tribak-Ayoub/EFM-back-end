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

    public function index(Request $request)
    {
        return view('PkgWidget::test');
    }

    public function execute(Request $request)
    {
        $method = $request->input('method_name');

        $result = $this->widgetService->executeMethod($method);

        return view('PkgWidget::test', compact('result'));
    }
}
