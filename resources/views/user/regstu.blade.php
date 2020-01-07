@extends('user\master')

@section('content')
<div style="margin-left :  40vmin;">
    <div class="table-responsive" style="overflow: scroll;">
        <h3 class="text-center">Registered Students</h3>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>URN</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Branch</th>
                    <th>Mobile</th>
                    <th>Company Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dat['students'] as $data)
                <tr>
                    <td> {{$data->urn}} </td>
                    <td> {{$data->name}} </td>
                    <td> {{$data->email}} </td>
                    <td> {{$data->branch}} </td>
                    <td> {{$data->phone}} </td>
                    <td> {{$data->company_name}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection