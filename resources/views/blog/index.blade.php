@extends('layouts.app')
@section('content')
    <div class="container.fluid overflow-hidden p-0 m-0 g-0">
        <div class="row">
            <div class="col-md-5 pt-2 leftSide">
                <div class="row flex-column m-3">
                    <div class="col">
                        <h1 class="display-one">Our Blog!</h1>
                        <p>Enjoy reading our posts. Click on a post to read!</p>
                    </div>
                    <div class="col">
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Create New Post</a>
                    </div>
                </div>                
            </div>
            <div class="col-md-7 pt-2 rightSide">
                <div class="overflow-auto w-100 no-scrollbar my-5 p-3">
                    @forelse($posts as $post)
                        <ul class='list-unstyled align-self-start blogList p-2 mx-sm-4'>
                            <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                        </ul>
                    @empty
                        <p class="text-warning">No blog Posts available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection