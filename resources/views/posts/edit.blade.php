@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Post</div>
                <div class="panel-body">
                        <form action="{{ route('update_post', $post->id) }}" method="POST"  class="form-horizontal"> 


                        @csrf
                       
                       

                        <div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
                        <label for="title" class="col-md-4 control-label"></label>
                    
                        <div class="col-md-6">
                            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required autofocus>

                            @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                                
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                        <label for="body" class="col-md-4 control-label">Body</label>

                        <div class="col-md-6">
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control" required>{{ $post->body }}</textarea>
                            @if ($errors->has('body'))
                            <span class="help-block">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
                            
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('list_posts') }}" class="btn btn-primary">Cancel</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection