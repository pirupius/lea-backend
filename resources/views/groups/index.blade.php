@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Groups</li>
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

                    @if($groups->count() > 0)

                        {{ $groups->links() }}

                        <table class="table table-bordered table-striped table-condensed">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">District</th>
                                    <th scope="col">village</th>
                                    <th scope="col">Subcounty</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Members</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($groups as $group)
                                    <tr>
                                        <td>{{ $group->name }}</td>
                                        <td>{{ $group->district }}</td>
                                        <td>{{ $group->village }}</td>
                                        <td>{{ $group->Subcounty }}</td>
                                        <td>{{ $group->Country }}</td>
                                        <td><a href="/groups/{{$group->id}}/members">members</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $groups->links() }}
                    @else
                        <span>No registered groups</span>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
