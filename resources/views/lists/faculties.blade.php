@extends('lists.layouts.app')
@section("content")
    <div>
        <table>
            <thead>
                <th>Faculty list</th>
            </thead>
            <tbody>
            <?php
                $i = 1;
            ?>
                @foreach($faculties as $faculty)
                    <tr class="border-separate border border-slate-500">
                        <td>{{$i++}}</td>
                        <td>
                            {{$faculty->name}}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
