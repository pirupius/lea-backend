@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Group {{ $group->id }} Members</li>
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

                    @if($group->members()->count() > 0)

                        <table class="table table-bordered table-striped table-condensed">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Registration Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($group->members()->get() as $member)
                                    <tr>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->phone }}</td>
                                        <td>{{ $member->district }}</td>
                                        <td>{{ $member->location }}</td>
                                        <td>{{ $member->pivot->representative_title }}</td>
                                        <td>{{ Carbon\Carbon::parse($member->created_at)->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    @else
                        <span>No registered members for Group {{ $group->id }}</span>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
