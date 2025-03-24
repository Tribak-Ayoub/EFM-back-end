<?php

namespace Modules\PkgWidget\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\PkgWidget\App\Services\WidgetService;
use Modules\PkgWidget\Models\Widget;

class WidgetController extends Controller
{
    protected $widgetService;

    public function __construct(WidgetService $widgetService)
    {
        $this->widgetService = $widgetService;
    }

    public function index()
    {
        $widgets = $this->widgetService->getWidgets();
        return view('PkgWidget::test', compact('widgets'));
    }

    public function execute(Request $request)
    {
        $method = $request->input('method_name');

        $result = $this->widgetService->executeMethod($method);

        return view('PkgWidget::test', compact('result'));
    }

    public function create()
    {
        return view('PkgWidget::create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate(
            [
                "name" => 'required|string|max:255',
                "method" => 'required|string|max:255',
            ]
        );
        $this->widgetService->createWidget($validated);

        return redirect()->route('index');
    }

    public function show(string $id)
    {
        $widget = $this->widgetService->getWidgetById($id);

        return view('PkgWidget::show', compact('widget'));
    }

    public function edit($id)
    {
        $widget = Widget::findOrFail($id);

        return view('PkgWidget::edit', compact('widget'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                "name" => 'required|string|max:255',
                "method" => 'required|string|max:255',
            ]
        );
        $widgets = Widget::findOrFail($id);
        $this->widgetService->updateWidget($widgets, $validated);

        return redirect()->route('index');
    }

    public function destroy(string $id)
    {
        $widget = Widget::findOrFail($id);
        $this->widgetService->deleteWidget($widget);

        return redirect()->route('index');
    }
}
