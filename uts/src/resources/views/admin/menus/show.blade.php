@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.menu.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.menus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.menu.fields.id') }}
                        </th>
                        <td>
                            {{ $menu->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.menu.fields.image') }}
                        </th>
                        <td>
                            @if($menu->image)
                                <a href="{{ $menu->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $menu->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.menu.fields.name') }}
                        </th>
                        <td>
                            {{ $menu->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.menu.fields.description') }}
                        </th>
                        <td>
                            {{ $menu->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.menu.fields.price') }}
                        </th>
                        <td>
                            {{ $menu->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.menu.fields.category') }}
                        </th>
                        <td>
                            {{ $menu->category ? $menu->category->name : '' }}
                        </td>
                    </tr>                    
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.menus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection