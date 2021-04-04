@extends('question.main')

@section('title', 'Details of Question')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1>Details of Question</h1>
        </div>

        <div class="row mt-3">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <h2 class="card-title">[{{$question->title}}]</h2>
                    <p class="card-text">{{$question->content}}</p>
                    <h5>Date created</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$question->created_at}}</h6>
                    <h5>Date modified</h5>
                    <h6 class="card-subtitle mb-3 text-muted">{{$question->updated_at}}</h6>
                    <a href="/question" class="btn btn-success mb-2">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection