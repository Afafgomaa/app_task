@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Services</div>

                <div class="card-body">
                   <table class="table" style="text-slien:center">
                       <thead>
                       <tr>
                           <th scope="col">Order</th>
                           <th scope="col">Name</th>
                           <th scope="col">Image</th>
                           <th scope="col">Edit</th>
                           <th scope="col">delete</th>
                       </tr>
                       </thead>
                       <tbody>
                      @foreach($services as $service)
                       <tr>
                               <td>
                                {{$service->order}}
                               </td>
                                <td>{{$service->name}}</td>
                               <td>
                                <img src="{{asset($service->image)}}" height="50" width="50">
                               </td>

                               <td>
                               <a href="{{route('Service.edit',['id' => $service->id])}}" class="btn btn-success">Edit</a>
                               </td>
                               <td>
                                 <form method="post" action="{{route('Service.destroy',['id' => $service->id ] )}}">
                                  @csrf
                                  @method('DELETE')
                                <button type="submit">Delete</button>
                                </form>
                               </td>
                        </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection