@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All List</div>

                <div class="card-body" id="list">
                     <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Team</th>
                            <th>League List</th>
                            <th>Player List</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php $i = 1; @endphp
                          @if(!empty($all_records) && count($all_records) > 0)
                            @foreach($all_records as $record)
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $record->name }}</td>
                                @if(!empty($record->leagues) && count($record->leagues))
                                <td>
                                    <ul>
                                        @foreach($record->leagues as $league)
                                        <li>{{ $league->title }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                @endif

                                @if(!empty($record->players) && count($record->players))
                                <td>
                                    <ul>
                                        @foreach($record->players as $player)
                                        <li>{{ $player->name }}</li>
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





