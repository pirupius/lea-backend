@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agro Experts</li>
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

                    @if($agroexperts->count() > 0)

                        {{ $agroexperts->links() }}

                        <table class="table table-bordered table-striped table-condensed">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">District</th>
                                    <th scope="col">village</th>
                                    <th scope="col">Country</tountryh>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agroexperts as $expert)
                                    <tr>
                                        <td>{{ $expert->name }}</td>
                                        <td>{{ $expert->phone }}</td>
                                        <td>{{ $expert->district }}</td>
                                        <td>{{ $expert->village }}</td>
                                        <td>{{ $expert->country }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $agroexperts->links() }}
                    @else
                        <span>No registered agroexperts</span>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
