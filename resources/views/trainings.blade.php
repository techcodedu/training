@extends('layout')

@section('content')
@include('partials._hero')

{{-- heading --}}
<h2>{{$heading}}</h2>

@if(count($trainings)==0)
    <p>No Courses yet available</p>

@endif

{{-- display data --}}
  
    @foreach($trainings as $training)
    {{-- 
        <h2>{{$training['course_title']}}</h2>
        <p>{{$training['description']}}</p>
        <p>{{$training['category']}}</p> --}}
        <div class="container">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top"src="{{asset('images/laravelpillar.jpg')}}" alt="">
                        <h5>{{$training->course_title}}</h5>
                        <p>{{$training->description}}</p>
                        <p>{{$training->category}}</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$training->id}}">Click to View Info</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="exampleModal-{{$training->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
 @endsection