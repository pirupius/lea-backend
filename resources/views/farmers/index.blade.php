@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Farmers</li>
        </ol>
    </nav>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($farmers->count() > 0)

                        {{ $farmers->links() }}

                        <table class="table table-bordered table-striped table-condensed">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Registration Date</th>
                                    <th scope="col">Reports</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($farmers as $farmer)
                                    <tr>
                                        <td>{{ $farmer->name }}</td>
                                        <td>{{ $farmer->phone }}</td>
                                        <td>{{ $farmer->district }}</td>
                                        <td>{{ $farmer->location }}</td>
                                        <td>{{ Carbon\Carbon::parse($farmer->created_at)->diffForHumans() }}</td>
                                        <td><a href="#">view reports</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $farmers->links() }}
                    @else
                        <span>No registered farmers</span>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
