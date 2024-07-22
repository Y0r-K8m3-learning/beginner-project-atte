@extends('layouts/app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css')}}">
<link rel="stylesheet" href="{{ asset('css/paginate.css') }}">

@endsection

@section('link')
<form action="/logout" method="post">
    @csrf
    <input class="header__link" type="submit" value="logout">
</form>
@endsection

@section('content')
<div class="admin">
    <div class="date-switcher">
        <div class="date-switcher-inner">
            ユーザ一覧

        </div>
    </div>
    <div class="admin__inner">
        <table class="admin__table">
            <tr class="admin__header-row admin__row">
                <th class="admin__label">名前</th>
                <th class="admin__label">
                </th>
            </tr>
            @foreach($users as $user )
            <tr class="admin__row">
                <td class="admin__data">{{$user['name']}}</td>
                <td class="admin__data">
                    <form action="/search/user/attendance" method="GET">
                        <input type="hidden" name="user_name" value="{{ $user['name'] }}">
                        <input type="hidden" name="id" value="{{ $user['id'] }}">
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="submit">勤怠</button>
                        </div>
                    </form>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="search-form-subcontent__pagenation">

        @if(count($users) >0)
        {{ $users?? $users->appends(request()->query())->links('vendor.pagination.custom')}}
        @endif

    </div>

</div>
@endsection