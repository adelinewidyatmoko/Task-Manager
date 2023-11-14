@extends('layouts.parent')
@section('title', 'halo
    Page')<!--di sini section, di parent yield maka bisa diubah!, gaperlu endsection karena udah koma-->


@section('sidebar') <!--disini section , di parent section maka fixed!-->
    @parent
@endsection

@section('header') <!--disini section, di parent section maka fized!-->
    @parent
@endsection

@section('content')<!--disini section , di aprent yield maka bisa diubah!-->
    <h1>To do</h1>

    <div class="row">
      {{-- {{dd($task)}} --}}
      @foreach($tasks as $task)
        <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
                <div class="position-relative">
                    <a href="javascript:void(0)"><img src="{{$task['image']['path']}}" class="card-img-top rounded-0"
                            alt="..."></a>
                    <a href="javascript:void(0)"
                        class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                            class="ti ti-basket fs-4"></i></a>
                </div>
                <div class="card-body pt-3 p-4">
                    <h6 class="fw-semibold fs-4">{{$task['title']}}</h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <p>{{$task['description']}}</p>
                    </div>
                </div>
                <a href="" class="btn btn-success">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
    
            </div>
        </div>
        @endforeach
        <div class="text-center">
          <nav aria-label="Page navigation">
              <ul class="pagination
              ">
                  <li>
                      <a href="{{$tasks->previousPageUrl()}}" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                      </a>
                  </li>
                  @for ($i = 1; $i <= $tasks->lastPage(); $i++)
                      <!-- <li><a href="{{$tasks->url($i)}}">{{$i}}</a></li> -->
                      <!-- fix pagination based on search keyword also -->
                      <li
                      
                      style='margin: 10px;'><a href="{{$tasks->appends(['search' => request()->search])->url($i)}}">{{$i}}</a></li>
                      @endfor
                      <li>
                          <a href="{{$tasks->nextPageUrl()}}" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                          </a>
                      </li>
              </ul>
          </nav>
      </div>
    </div>

   

    

@endsection
