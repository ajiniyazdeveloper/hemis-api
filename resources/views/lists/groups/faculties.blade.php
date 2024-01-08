@extends('lists.layouts.app')
@section("content")
    <section class="group_faculties">
        <div>
                <ul>
                    @foreach($faculties as $faculty)
                        <li>
                            <a href="{{route('group_faculty', [$faculty->id])}}"> {{$faculty->name}}</a>
                        </li>
                    @endforeach
                </ul>
        </div>
    </section>
@endsection
