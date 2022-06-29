@extends('backend.app')
@section('icerik')  
<div class="all-content-wrapper">  

            <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Applications</h4>
                            <div class="add-product">
                                <a href="product-edit.html">Add Applications</a>
                            </div>   
                        <form action="/admin/addApplications" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                         <div class="row"> 
                                <div class="form-group col-lg-12"> 
                                    <label style="color:white;">Name</label> 
                                    <input class="form-control" name="name">
                                </div>  
                                <div class="form-group col-lg-12">
                                    <select name="projectId" class="form-control">
                                        @if(!empty($projects))
                                            <option value="bos"></option>
                                            @foreach($projects as $project)
                                                <option value="<?php echo $project['id'] ?>"><?php echo $project['title'] ?></option>
                                            @endforeach
                                         @endif
                                    </select>   
                                </div>
                                <div class="form-group col-lg-12">
                                    <label style="color:white;">Explanation</label>
                                    <textarea class="form-control" name="explanation" rows="4"></textarea>
                                </div> 
                                <div class="form-group col-lg-12">
                                    <label style="color:white;">Image</label>
                                    <input type="file" class="form-control" name="image">
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
            </div>
        </div>
</div> 
@endsection

@section('css') @endsection
@section('js') @endsection