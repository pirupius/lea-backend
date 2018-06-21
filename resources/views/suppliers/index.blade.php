@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Suppliers</li>
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

                    @if($suppliers->count() > 0)

                        {{ $suppliers->links() }}

                        <table class="table table-bordered table-striped table-condensed">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Pesticides</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Village</th>
                                    <th scope="col">Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($suppliers as $supplier)
                                    <tr>
                                        <td>{{ $supplier->name }}</td>
                                        <td>{{ $supplier->phone }}</td>
                                        <td>{{ $supplier->pesticides }}</td>
                                        <td>{{ $supplier->district }}</td>
                                        <td>{{ $supplier->village }}</td>
                                        <td>{{ $supplier->country }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $suppliers->links() }}
                    @else
                        <span>No registered suppliers</span>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
