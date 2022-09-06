@extends('layouts.app')
@section('content')
    <div class="bg-biru">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <a href="/blog" class="btn btn-outline-primary btn-sm my-2">Go back</a>
                    <div class="cardBlur p-4 mt-3">
                        <h1 class="display-one text-center my-2">{{ucfirst($post->title)}}</h1>
                        <p class="">{!! $post->body !!}</p>
                        <hr>
                    </div>
                    <div class=" text-center my-5">
                        <a href="/blog/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm-modal">Delete Post</button>
                        <!-- <form id='delete-frm' method='POST' action="" class='d-inline my-3'>
                            @method('DELETE')
                            @csrf 
                            <button class="btn btn-danger">Delete Post</button>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="confirm-modal" tab-index="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Are you sure you want to delete?</h5>
                    </div>
                    <div class="modal-body">
                        <form id='delete-frm' method='POST' action="" class='d-inline my-3'>
                            @method('DELETE')
                            @csrf 
                            <button class="btn btn-outline-danger">Yes</button>
                        </form>
                        <button class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
@endsection