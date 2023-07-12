@extends('userDashboard.index')
@section('login')
<div class="full_container">
    <div class="container">
       <div class="center verticle_center full_height">
          <div class="login_section">
             <div class="logo_login">
                <div class="center">
                  <!-- <img width="210" src="{{asset('img/img-sekolah/is-2.jpg')}}" alt="#" /> -->
                </div>
             </div>
             <div class="login_form">
                <form>
                   <fieldset>
                      <div class="field">
                         <label class="label_field">Username</label>
                         <input type="username" name="username" placeholder="Masukan Username" />
                      </div>
                      <div class="field">
                         <label class="label_field">Password</label>
                         <input type="password" name="password" placeholder="Password" />
                      </div>
                      <div class="field">
                         <label class="label_field hidden">hidden label</label>
                         <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                         <a class="forgot" href="">Forgotten Password?</a>
                      </div>
                      <div class="field margin_0">
                         <label class="label_field hidden">hidden label</label>
                         <button class="main_bt">Masuk</button>
                      </div>
                   </fieldset>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
