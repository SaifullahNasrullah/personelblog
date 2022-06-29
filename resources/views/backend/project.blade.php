@extends('backend.app')
@section('icerik')  
<div class="all-content-wrapper">  

    <div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Projects</h4>
                    <div class="add-product">
                        <a href="product-edit.html">Add New Projects </a>
                    </div>  
             <form action="/admin/addProjects" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row"> 
                    <div class="form-group col-lg-12"> 
                        <label style="color:white;">Title</label> 
                        <input class="form-control" name="title">
                    </div> 
                    <div class="form-group col-lg-12">
                        <label style="color:white;">Count</label>
                        <input type="text" class="form-control" name="count">
                    </div>   
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-success loginbtn">Save</button> 
                    <button class="btn btn-default">Cancel</button>
                </div>
            </form> 
                </div>
                </div>
            </div>

            <table style="width:100%; color:white; margin-top: 10px;">
                <tr>
                    <th>Count</th>
                    <th>Title</th> 
                    <th>Operation</th>
                </tr>
                @if(!empty($projelist))
                    @foreach($projelist as $project)
                    <tr>
                        <td>{{$project->count}} </td>
                        <td>{{$project->title}}</td> 
                        <td>
                            <a href="/admin/UpdateProject/{{$project->id}}">Update </a>|
                            <a href="/admin/ProjectDelete/{{$project->id}}"> Delete</a> 
                        </td>
                    </tr>
                    @endforeach
                @endif 
            </table>
            @if(session()->has('cevap'))
                    <p style="color:#fba80c;">
                        {{session()->get('cevap')}}
                    </p>
            @endif
        </div>
    </div>
</div> 
@endsection

@section('css') @endsection
@section('js') @endsection