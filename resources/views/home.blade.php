@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-success">{{ $farmers->count() }}</h4>
                            <p>Registered Farmers</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-success">{{ $agroexpert->count() }}</h4>
                            <p>Agro Experts</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-success">{{ $suppliers->count() }}</h4>
                            <p>Pesticide Suppliers</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="text-success">Gender of Farmers</h4>
                    <table class="table table-striped">
                        <tr>
                            <td>Male</td><td>{{ $farmers_gender['Male']->count() }}</td>
                        </tr>
                        <tr>
                            <td>Female</td><td>{{ $farmers_gender['Female']->count() }}</td>
                        </tr>
                    </table>

                    {{-- <div class="col-md-6">
                        {{ $farmers_gender->container() }}
                    </div> --}}
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="text-success">
                        Farmers By District
                    </h4>
                    <table class="table table-condensed">
                        @foreach($farmers_district as $key => $value)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $value->count() }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- {{ $chart->script() }} --}}
</div>
@endsection
