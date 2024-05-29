<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMenuRequest;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Menu;
use App\Models\Category;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MenuController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('menu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menus = Menu::with(['category', 'media'])->get();

        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        abort_if(Gate::denies('menu_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all();

        return view('admin.menus.create', compact('categories'));
    }

    public function store(StoreMenuRequest $request)
    {
        $menu = Menu::create($request->all());

        if ($request->input('image', false)) {
            $menu->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $menu->id]);
        }

        return redirect()->route('admin.menus.index')->with('success', 'Menu item created successfully.');
    }

    public function edit(Menu $menu)
    {
        abort_if(Gate::denies('menu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all();

        return view('admin.menus.edit', compact('menu', 'categories'));
    }

    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->update($request->all());

        if ($request->input('image', false)) {
            if (!$menu->image || $request->input('image') !== $menu->image->file_name) {
                if ($menu->image) {
                    $menu->image->delete();
                }
                $menu->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($menu->image) {
            $menu->image->delete();
        }

        return redirect()->route('admin.menus.index')->with('success', 'Menu item updated successfully.');
    }

    public function show(Menu $menu)
    {
        abort_if(Gate::denies('menu_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.menus.show', compact('menu'));
    }

    public function destroy(Menu $menu)
    {
        abort_if(Gate::denies('menu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menu->delete();

        return back();
    }

    public function massDestroy(MassDestroyMenuRequest $request)
    {
        Menu::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('menu_create') && Gate::denies('menu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model = new Menu();
        $model->id = $request->input('crud_id', 0);
        $model->exists = true;
        $media = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
