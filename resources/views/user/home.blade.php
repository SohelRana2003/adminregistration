@extends('layouts.userapp')

@section('title', 'User Home')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="content-box">
                <h3>Ultimate Dark Theme Toggler</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt obcaecati odit facilis rerum ipsam rem debitis nobis soluta perspiciatis non! Magni quia repudiandae, rem doloremque eveniet voluptas nisi quisquam porro et. Porro distinctio eveniet facere consequuntur minus aliquid recusandae voluptates!</p>
                <p>--Sohel Rana--</p>                    
            </div>
        </div>
    </div>

          <!-- Modal Sing in -->
    <div class="modal fade" id="Singin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="SinginLabel" aria-hidden="true">
      <div class="sing">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <form action="" method="post">

              <div class="modal-header">
                <h5 class="modal-title" id="SinginLabel">Sing in</h5>
                <a href="" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
              </div>
              <div class="modal-body">

                    <div class="form-group row" id="form">
                        <label class="col-form-label">User Email</label>
                        <input type="email" id="email" name="" placeholder="User Email" onkeyup="validate();">
                        <span class="indicator"> . </span>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label">User Password</label>
                        <input type="password" id="password" name="" placeholder="User Password">
                    </div>

              </div>
              
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary">Sing in</button>
              </div>

            </form>
          </div>
        </div>        
      </div>

    </div> <!-- Modal Sing in -->  

          <!-- Modal Sing up -->
    <div class="modal fade" id="Singin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="SingupLabel" aria-hidden="true">
      <div class="sing">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <form action="" method="post">

              <div class="modal-header">
                <h5 class="modal-title" id="SingupLabel">Sing up</h5>
                <a href="" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
              </div>
              <div class="modal-body">

                    <div class="form-group row" id="form">
                        <label class="col-form-label">User Email</label>
                        <input type="email" id="email" name="" placeholder="User Email" onkeyup="validate();">
                        <span class="indicator"> . </span>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label">User Password</label>
                        <input type="password" id="password" name="" placeholder="User Password">
                    </div>

              </div>
              
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary">Sing up</button>
              </div>

            </form>
          </div>
        </div>        
      </div>

    </div> <!-- Modal Sing up -->  
    
@endsection