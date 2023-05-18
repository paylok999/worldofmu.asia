  @extends('layout')
  @section('content')
    <div class="contact_section layout_padding padding_top_0">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="email_box">
                    <div class="input_main">
                       <div class="container">
                          <form action="/register" method="post" id="regform">
                            @csrf
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Username" name="username">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Password" name="password">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Secret Word (For account recovery)" name="secreta">
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                          </form>   
                       </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        @if (session()->get('msg'))
                        <div class="alert @if(session()->get('err') == 1) alert-danger @else alert-success @endif">
                            {{ session()->get('msg') }}
                        </div>
                        @endif
                        
                        <div class="main_bt" style="background:#4f99e5"><a href="javascript:void(0)" onclick="document.getElementById('regform').submit();">Register</a></div>                  
                    </div>
                 </div>
        </div>
        <div class="col-md-6">
          <div class="image_6"><img src="images/register_img.png"></div>
        </div>
      </div>
    </div>
  </div>
    @stop
    