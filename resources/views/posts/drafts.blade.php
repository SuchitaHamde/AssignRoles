@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>  Drafts </h3>
                    <div class="d-grid  d-md-flex justify-content-md-end">

                    <a href="{{ route('list_posts') }}" class="btn btn-primary me-md-2">Return</a>
                    </div>
 
                </div>

                <div class="panel-body">
                    <div class="row">
                        @foreach ($posts as $post )
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        {{-- <h3><a href="{{ route('show_post',  $post->id) }}">{{ $post->title }}</a></h3> --}}
                                        <h3><a href="{{ route('read_post',  $post->id) }}">{{ $post->title }}</a></h3>

                                        <p>{{ str_limit($post->body, 50) }}</p>
                                        <p>
                                        @can('publish-post')
                                        
                                            <a href="{{ route('publish_post',  $post->id) }}" class="btn btn-secondary" role="button">Publish</a>
                                        
                                        @endcan
                                      
                                        
                                        <h1><a href="{{ route('edit_post',  $post->id) }}" class="btn btn-info" role="button">Edit</a></h1>
                                       
                                        </p>
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