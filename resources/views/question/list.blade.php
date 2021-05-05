@extends('question.main')

@section('title', 'List of Questions')

@section('content')
    <div class="container mt-5">
        <div class="row text-center">
            <h1>List Of Questions</h1>
        </div>
        
        <div class="row">
            <div class="col text-center">
                <a href="{{url('/')}}" class="btn btn-secondary">Back</a>
                <a href="{{url('/question/create')}}" class="btn btn-primary">Add Question</a>
            </div>
        </div>

        <div class="row">
            @if (session('success'))
                <div class="alert alert-success mt-3 p-2 text-center" role="alert">{{session('success')}}</div>
            @endif
        </div>

        <div class="row mt-3">
            <table class="table table-hover table-stripped text-center">
                <thead>
                    <tr>
                        <th scope="col" class="h5">No</th>
                        <th scope="col" class="h5">Title</th>
                        <th scope="col" class="h5">Handle</th>
                    </tr>
                </thead>
                <tbody>
                
                @php($count = 0)

                @foreach ($questions as $question)
                    @php($count++)
                    <tr>
                        <td scope="col">{{$count}}</td>
                        <td scope="col">{{$question->title}}</td>
                        <td>
                            <a href="/question/{{$question->id}}" class="btn btn-sm btn-success">Details</a>
                            <a href="/question/{{$question->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/question/{{$question->id}}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection