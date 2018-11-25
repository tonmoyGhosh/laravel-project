@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Player List</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Name</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php $i = 1; @endphp
                          @if(!empty($players) && count($players) > 0)
                            @foreach($players as $player)
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $player->name }}</td>
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
