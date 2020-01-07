@extends('user\master')

@section('content')
<div class="main">
    <div id='us'>
        <div class="table-responsive">
            <h3 class="text-center">Users</h3>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dat['users'] as $data)
                    <tr class="clickable-row">
                        <td> {{$data->name}}</td>
                        <td> <a href="\role?id={{ $data->id }}">{{$data->role}} </a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection