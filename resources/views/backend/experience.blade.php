@extends('backend.app')
@section('icerik')  
<div class="all-content-wrapper">  

    <div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Experiences</h4>
                    <div class="add-product">
                        <a href="product-edit.html">Add New Experiences </a>
                    </div>  
             <form action="/admin/addExperiences" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row"> 
                    <div class="form-group col-lg-12"> 
                        <label style="color:white;">Year</label> 
                        <input class="form-control" name="year">
                    </div>
                    <div class="form-group col-lg-12">
                        <label style="color:white;">Company</label>
                        <input type="text" class="form-control" name="company">
                    </div>
                    <div class="form-group col-lg-12">
                        <label style="color:white;">Position</label>
                        <input type="text" class="form-control" name="position">
                    </div> 
                    <div class="form-group col-lg-12">
                        <label style="color:white;">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div> 
                    <div class="form-group col-lg-12">
                        <label style="color:white;">Explanation</label>
                        <textarea class="form-control" name="explanation" rows="4"></textarea>
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
            <table style="width:100%; color:white;">
                <tr>
                    <th>Year</th>
                    <th>Company</th>
                    <th>Position</th>
                    <th>Title</th>
                    <th>Operations</th>
                </tr>
                @if(!empty($experiences))
                    @foreach($experiences as $exp)
                        <tr>
                            <td>{{$exp->year}} </td>
                            <td>{{$exp->company}}</td>
                            <td>{{$exp->position}}</td>
                            <td>{{$exp->title}}</td> 
                            <td><a href="/admin/experience/update/{{$exp->id}}">Update </a>|<a href="/admin/experience/delete/{{$exp->id}}"> Delete</a>  </td>
                        </tr>
                    @endforeach
                @endif 
            </table>
        </div>
    </div>
</div> 
@endsection

@section('css') @endsection
@section('js') @endsection