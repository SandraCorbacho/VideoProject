@extends('front.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class='text-center mt-5'>VBlog</h1>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-3">
                <h3> Lo nuevo</h3>
            </div>
            <div class="col-9">
            
                <div class="row justify-content-center">
                @foreach($videos as $video)
                    @if($video->active)
                        <div class="col-3">
                            <h2>{{$video->title}}</h2>
                            <video class='w-100' controls>
                                <source src="{{asset($video->path)}}" type="video/mp4">
                                <p>{{$video->description}}</p>
                            </video> 
                        </div>
                    @endif
                @endforeach                  
                </div>
            </div>
        </div>
    </div>    
    
@endsection