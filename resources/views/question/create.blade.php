@extends('question.main')

@section('title', 'Create Question')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1>Create Question</h1>
        </div>

        <div class="row mt-3">
            <form action="{{url('/question')}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" value="{{old('title')}}">
                    @error('title')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="input-group mb-4">
                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Content" rows="5">{{old('content')}}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <a href="/question" class="btn btn-info">Cancel</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection