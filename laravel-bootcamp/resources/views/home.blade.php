@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello, <span class="fw-bold">{{ Auth::user()->name }}! 🖐🏽</span></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('addtodo') }}">
                    @csrf
                        <input type="text" class="form-control" name="content" placeholder="Write something here...">
                        <button type="submit" class="btn btn-primary btn-sm mt-3">Add</button>
                    </form>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">To-do List</div>
                <div class="card-body">
                    <ul>
                        @foreach($todos as $todo)
                            <li>
                                {{ $todo -> content }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
