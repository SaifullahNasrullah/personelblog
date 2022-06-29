@extends('backend.app')
@section('icerik')  

<div class="all-content-wrapper">  

            <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="product-edit.html">Add Peronel Information</a>
                            </div>  
                            <a name="subscribes"></a> 
                        <form action="/admin/Addpersonelinformation" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                         <div class="row"> 
                                <div class="form-group col-lg-12"> 
                                    <label style="color:white;">Name Surname</label> 
                                    <input class="form-control" name="name" value="{{$personelinfo->name}}">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label style="color:white;">Date Of Birth</label>
                                    <input type="text" class="form-control" name="dob" value="{{$personelinfo->dob}}">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label style="color:white;">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$personelinfo->phone}}">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label style="color:white;">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{$personelinfo->email}}">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label style="color:white;">Address</label>
                                    <input type="text" class="form-control" name="address"value="{{$personelinfo->address}}">
                                </div> 
                                <div class="form-group col-lg-12">
                                    <label style="color:white;">Instgram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{$personelinfo->instagram}}"> 
                                </div> 
                                <div class="form-group col-lg-12">
                                    <label style="color:white;">Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin" value="{{$personelinfo->linkedin}}">
                                </div>  
                                <div class="form-group col-lg-12">
                                    <label style="color:white;">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    <img src="/uploads/pictures/{{$personelinfo->image}}"/>
                                </div> 
                        </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-success loginbtn">Save</button>  
                                @if(session()->has('cevap'))
                                <p style="color:#fba80c;">
                                    {{session()->get('cevap')}}
                                </p>
                                @endif
                            </div>
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


    