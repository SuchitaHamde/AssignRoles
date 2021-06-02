@extends('layouts.app')

@section('content')
<div class="contriner">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center>
                <div class="panel-heading">
                    
                  <h3 class="light-green">  {{ $post->title }} <h3>
                    {{-- <a href="{{ route('list_posts') }}" class="btn btn-secondary pull-right">Return</a> --}}
                </div>
                <div class="panel-body">
                   <h5> {{ $post->body }} <h5>
                </div>
                <a href="{{ route('list_posts') }}" class="btn btn-secondary pull-right">Return</a>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection