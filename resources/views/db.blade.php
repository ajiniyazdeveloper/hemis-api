@extends('lists.layouts.app')
@section("content")
    <div class="success">
        @if(Session::has('message'))
            <span>{{Session::get('message')}}</span>
        @endif
    </div>
    <ul>
        <li><a href="{{route('db_curriculum')}}">DB Curriculum</a> </li>
    </ul>
@endsection
