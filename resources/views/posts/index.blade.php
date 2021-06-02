@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>POSTS<h3> 
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                    @can('create-post')
                        <a href="{{ route('create_post') }}" class="pull-right btn btn-sm btn-primary pd-4">New Post</a>
                    @endcan
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        @foreach ($posts as $post )
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <div class="container">
                                           
                                                
                                           
                                        <h3><a href="{{ route('read_post', $post->id) }}">{{ $post->title }}</a></h3>
                                        
                                        <p>{{ str_limit($post->body, 10) }}</p> 
                                      
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection