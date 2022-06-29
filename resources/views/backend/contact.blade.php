@extends('backend.app')
@section('icerik') 

<div class="all-content-wrapper">  

<div class="product-status mg-b-30">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
                <h4>Messages</h4>  
        <div class="row">
          <div class="col-md-12">
            <div class="card"> 
              <div class="card-body">  
                @foreach($Mesajlar as $message)
                    <button class="accordion">{{$message->name}} </button>
                    <div class="panel">
                    <div class="row">
                      <div class="col-md-6">
                          <b>Ad Soyad</b>: {{$message->name}}<br>
                          <b> Mail</b> : {{$message->email}}<br>
                          <b>Telefon</b>: {{$message->phone}}<br> 
                          <b>Message</b>: {{$message->message}}<br> 
                      </div> 
                      <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-sm btn-outline-danger btn-round btn-icon" 
                                onclick="window.location.href='/admin/DeleteMessages/{{$message->id}}'" title="Sil"><i class="fa fa-trash"></i></button>
                      </div>
                     </div>
                    </div><br><br>
                @endforeach 
              </div>
            </div>
          </div>  
        </div>
        </div>
        </div>
    </div>
</div>
</div> 
@endsection

@section('css') 
  
<style>
  .accordion {
    background-color: #1b2a47;
    color: #fff;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
  }

  .active, .accordion:hover {
    background-color: #1b2a47; 
    color:#444;
  }

  .panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
  }
  </style>
@endsection
@section('js')
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() { 
        this.classList.toggle("active");
 
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
        panel.style.display = "none";
        } else {
        panel.style.display = "block";
        }
      });
    } 
 </script>
@endsection