@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Add Role {{ $user->name }}</h2></div>
                <div class="panel-body">
                    {{-- <form action="{{ route('store_role') }}" method="POST" role="form" class="form-horizontal">
                        @csrf --}}
                        {{-- @foreach ($users as $user) --}}
                            
                        
                       
                       <form action="{{ route('store_roles', $user)  }}" method="POST" role="form" class="form-horizontal">
                     @method('PUT')
                        @csrf

                            {{-- @endforeach --}}
                            
                            <select id="role" name="role" class="form-select" aria-label="Default select example">
                                <option selected value="">--select--</option>
                                @foreach ($roles as $role )
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                                
                            </select>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                            
                        </form>
                           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection