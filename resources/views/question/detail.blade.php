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
                    <div class="bg-success text-white p-2 mb-2 rounded">
                        <h2 class="card-title">[{{$question->title}}]</h2>
                        <p class="card-text mb-0">{{$question->content}}</p>
                    </div>

                    <p class="card-text fst-italic">Asked by {{$question->user['name']}}</p>

                    @if ($question->created_at == $question->updated_at)
                        <h6 class="card-subtitle mb-2 text-muted fst-italic">Created at {{$question->created_at}}</h6>
                    @else
                        <h6 class="card-subtitle mb-2 text-muted fst-italic">Created at {{$question->created_at}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted fst-italic">Edited at {{$question->updated_at}}</h6>
                    @endif

                    @foreach ($question->tag as $tag)
                        <span class="badge badge-primary bg-primary">#{{$tag->name}}</span>
                    @endforeach

                    @php($count = 0)

                    @foreach ($question->answer as $answer)
                        @php($count++)
                    @endforeach

                    <hr>

                    @if ($count == 1)
                        <h2 class="pb-2">1 answer</h2>
                    @elseif ($count > 1)
                        <h2 class="pb-2">{{$count}} answers</h2>
                    @endif

                    @foreach ($question->answer as $answer)
                        @if ($question->correct_answer_id == $answer['id'])
                            <p class="bg-success text-white p-2 rounded">{{$answer['content']}} <span class="bg-warning text-dark d-inline mx-2 px-2 rounded">&#10003; Correct answer</span></p>
                            <p class="text-muted fst-italic">Answered at {{$answer['created_at']}}</p>
                            <hr>
                        @endif
                    @endforeach

                    @foreach ($question->answer as $answer)
                        @if ($question->correct_answer_id != $answer['id'])
                            <p class="bg-success text-white p-2 rounded">{{$answer['content']}}</p>
                            <p class="text-muted fst-italic">Answered at {{$answer['created_at']}}</p>
                            <hr>
                        @endif
                    @endforeach

                    <a href="/question" class="btn btn-success mb-2">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection