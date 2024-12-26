@extends('home.index')

@section('content')
<div class="login-page" style="height: unset; padding: 20px 0px 20px; background-color:transparent">

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline">
            <div class="card-header text-center" style="padding:40px 0px 20px">
                <div class="" style="padding: 0px 0px 10px">
                    <img src="" alt="" style="width:80px; height: 100px">
                </div>
                <a href="/" class="h1" style="color:#34ce57">
                    <b>Sidesa</b>
                </a>
                <div class="">
                    <span style="color: #007bff">Sistem Informasi Desa</span>
                </div>
            </div>
            <div class="card-body">

                <div class="" style="padding:10px 0px">
                    <!-- <p class="login-box-msg text-center"> -->
                        <h5 class="text-center" style="color: #888">Silahkan Login!</h5>
                    <!-- </p> -->

                </div>

            <form action="/login" method="POST" name="form-login" id="form-login">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <!-- <div class="error-field">error</div> -->
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="">   
                <!-- /.col -->
                <div class="" style="padding:15px 0px 0px 0px">
                    <button type="submit" class="btn btn-primary btn-block is-loading" role="off">Login</button>
                </div>
                <!-- /.col -->
                </div>
            
                @csrf()
            </form>


            <!-- /.social-auth-links -->

            <p class="mb-1 text-center" style="padding:30px 0px 10px">
                <a href="/">Kembali ke Halaman Utama</a>
            </p>
            </div>
            <!-- /.card-body -->
        </div>
    <!-- /.card -->
    </div>
</div>

<script>
$(document).ready(function(){
    
    $("#form-login").submit(function(){

        try{
            var $form = $(this),
            $email = $form.find("*[name='email']"),
            $password = $form.find("*[name='password']"),
            $button = $form.find("button[type='submit']");
    
    
            if($button.attr("role") === "off"){
                $button.attr("role", "on");
                $form.find(".error").removeClass("error");
                $form.find(".error-field").remove();
    
            //     //validate
                if( 
                    !validateEmail($email.val()) ||
                    $.trim($password.val()) === ""
                ){
                    if( !validateEmail($email.val()) ){
                        // $email
                        $email.addClass("error");
                        $email.parent("div").append("<span class='error-field'>Email tidak valid!</span>");
                    }
    
                    if( $.trim($password.val()) === ""){
                        $password.addClass("error");
                        $password.parent("div").append("<span class='error-field'>Tidak boleh kosong!</span>");
                    }
    
                    $form.find(".error").eq(0).focus();
                    $button.attr("role", "off");
                    return false;
                }
    
                // submit
                var $t = sendFormPost($form)
                .success(function(n){
                    console.log(n);
                    $button.attr("role", "off");
                    return false;
                })
                .error(function(n){
                    
                    console.log(n);
                    $button.attr("role", "off");

                    if(n.status !== 500){
                        $field = $form.find("*[name='"+n.responseJSON.error.field+"']");
                        $field.addClass("error");
                        $field.parent("div").append("<span class='error-field'>"+n.responseJSON.error.message+"</span>");

                        $field.focus();
                        return false;
                    }

                    alert(n.responseJSON.message);
                    return false;
                });
                
            }

        }
        catch(err){
            console.log(err);
            return false;
        }
        
        return false;
    });


    return false;
})
</script>
@endsection