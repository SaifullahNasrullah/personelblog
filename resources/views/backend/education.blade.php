@extends('backend.app')
@section('icerik')   

<div class="all-content-wrapper">  

    <div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Education</h4>
                    <div class="add-product">
                        <a href="product-edit.html">Add Schools </a>
                    </div>  
                    <form action="/admin/addEduinformation" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row"> 
                            <div class="form-group col-lg-12"> 
                                <label style="color:white;">Year</label> 
                                <input class="form-control" name="year">
                            </div>
                            <div class="form-group col-lg-12">
                                <label style="color:white;">School</label>
                                <input type="text" class="form-control" name="school">
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
                    <th>School</th>
                    <th>Title</th>
                    <th>Operations</th>
                </tr>
                @if(!empty($education))
                    @foreach($education as $educt)
                        <tr>
                            <td>{{$educt->year}} </td>
                            <td>{{$educt->school}}</td>
                            <td>{{$educt->title}}</td> 
                            <td><a href="/admin/education/update/{{$educt->id}}">Update </a>|<a href="/admin/education/delete/{{$educt->id}}"> Delete</a>  </td>
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