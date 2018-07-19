@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Extension Workers</li>
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

                    @if($extensionWorkers->count() > 0)

                        {{ $extensionWorkers->links() }}

                        <table class="table table-bordered table-striped table-condensed">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Village</th>
                                    <th scope="col">Country</tountryh>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($extensionWorkers as $extensionWorker)
                                    <tr>
                                        <td>{{ $extensionWorker->name }}</td>
                                        <td>{{ $extensionWorker->phone }}</td>
                                        <td>{{ $extensionWorker->district }}</td>
                                        <td>{{ $extensionWorker->village }}</td>
                                        <td>{{ $extensionWorker->country }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $extensionWorkers->links() }}
                    @else
                        <span>No registered extensionWorkers</span>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
