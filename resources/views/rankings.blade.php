@extends('layout')
@section('content')
    
    <div class="about_section layout_padding index_div_section">
        <div class="container container_addition">
          <div class="row">
            <div class="col-md-12">
                <h1 class="head-text" id="srvr-info">RANKINGS</h1>
                <p>Please wait 10minutes to refresh the level rankings</p>
                <div class="dropdown" style="margin:20px 0;">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Class
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach($classes as $k => $class)
                    <a class="dropdown-item" href="/rankings?class={{$k}}">{{$class}}</a>
                    @endforeach
                  </div>
                </div>

                
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">level</th>
                      <th scope="col">Class</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($rankings as $k => $ranking)
                    <tr>
                      <th scope="row">{{$k+1}}</th>
                      <td>{{$ranking->Name}}</td>
                      <td>{{$ranking->clevel}}</td>
                      <td>{{ $classes[$ranking->class] }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
@stop
