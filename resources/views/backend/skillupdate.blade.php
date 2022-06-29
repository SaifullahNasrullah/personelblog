@extends('backend.app')
@section('icerik')  
<div class="all-content-wrapper">  

    <div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Skills</h4>
                    <div class="add-product">
                        <a href="product-edit.html">Update Skills </a>
                    </div>  
             <form action="/admin/SaveUpdateSkills/{{$skills->id}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row"> 
                    <div class="form-group col-lg-12"> 
                        <label style="color:white;">Title</label> 
                        <input class="form-control" name="title" value="{{$skills->title}}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label style="color:white;">Point</label>
                        <input type="text" class="form-control" name="point" value="{{$skills->point}}">
                    </div> 
               </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-success loginbtn">Save</button> 
                    <button class="btn btn-default">Cancel</button>
                </div>
                @if(session()->has('cevap'))
                    <p style="color:#fba80c;">
                        {{session()->get('cevap')}}
                    </p>
                 @endif
            </form> 
                </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('css') @endsection
@section('js') @endsection