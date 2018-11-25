@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Team & League List</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Match List</th>
                            <th>League List</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php $i = 1; @endphp
                          @if(!empty($teams) && count($teams) > 0)
                            @foreach($teams as $team)
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $team->name }}</td>
                                @if(!empty($team->leagues) && count($team->leagues))
                                <td>
                                    <ul>
                                        @foreach($team->leagues as $league)
                                        <li>{{ $league->title }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                @endif
                              </tr>
                            @endforeach
                          @endif
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
