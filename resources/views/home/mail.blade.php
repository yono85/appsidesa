@extends('home.index')
@section('content')

<div class="row">
    <div class="col-lg-4">
        <div class="card" style="background-color:#ffeebd">
            <div class="card-body">
                <b class="card-title">Perhatian</b>

            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
            </p>
            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
            </p>
            <ul>
                <li>one</li>
                <li>two</li>
            </ul>
            </div>
        </div>

    </div>
        <!-- /.col-md-6 -->
    <div class="col-lg-8">
        <div class="card card-primary">
            <div class="card-header text-center bg-warning">
                <h3>Kotak Surat</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form style="padding:20px 40px 40px" action="/mail/create" id="form-mail">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Isikan nama lengkap Anda" maxlength="75">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control numberStatic w75p" id="nik" name="nik" type="text" maxlength="16" placeholder="Isikan NIK Anda">
                    </div>

                    <div class="form-group">
                        <label for="phone">No. Whatsapp / Phone</label>
                        <input type="text" class="form-control numberStatic w50p" id="phone" name="phone" type="text" maxlength="15" placeholder="Nomor Whatsapp atau Telepon">
                    </div>
                    
                    <div class="form-group">
                        <div class="div">
                            <label for="type">Jenis Pesan</label>
                        </div>
                        <select class="custom-select rounded-0 w50p" id="type" name="type">
                            <option value="-1">Pilih...</option>
                            <option value="1">Value 1</option>
                            <option value="2">Value 2</option>
                            <option value="3">Value 3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Isi Pesan</label>
                        <textarea class="form-control" rows="3" placeholder="Tuliskan pesan disini..." name="message" maxlength="150"></textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary is-loading" role="off" style="width:25%" >Kirim Pesan</button>
                </div>
                
            </form>
        </div>
    </div>
<!-- /.col-md-6 -->
</div>

<script>
$(document).ready(function(){

    $("#form-mail").submit(function(){
        try{
            var $form = $(this),
            $button = $form.find("button[type='submit']"),
            $name = $form.find("*[name='name']"),
            $nik = $form.find("*[name='nik']"),
            $phone = $form.find("*[name='phone']"),
            $type = $form.find("*[name='type']"),
            $message = $form.find("*[name='message']");
    
            if($button.attr("role") === "off"){
                $button.attr("role", "on");
    
                //
                $form.find(".error").removeClass("error");
                $form.find(".error-field").remove();
    
    
                //validate
                if( 
                    $.trim($name.val() ) === "" ||
                    $.trim($nik.val()).length < 16 ||
                    $.trim($phone.val()).length < 9 ||
                    $type.val() === "-1" ||
                    $.trim($message.val()).length < 15
                ){
    
                    if( $.trim($name.val()) === "" ){
                        $name.addClass("error");
                        $name.parent("div").append("<span class='error-field'>Harap isi nama lengkap</span>");
                    }
    
                    if( $.trim($nik.val()).length < 16 ){
                        $nik.addClass("error");
                        $nik.parent("div").append("<span class='error-field'>NIK harus 16 angka</span>");
                    }
    
                    if( $.trim($phone.val()).length < 9 ){
                        $phone.addClass("error");
                        $phone.parent("div").append("<span class='error-field'>Isikan no Telepon sekurangnya 9 angka</span>");
                    }
    
                    if( $.trim($type.val()) === "-1" ){
                        $type.addClass("error");
                        $type.parent("div").append("<span class='error-field'>Harap pilih Jenis Pesan</span>");
                    }
    
                    if( $.trim($message.val()).length < 15 ){
                        $message.addClass("error");
                        $message.parent("div").append("<span class='error-field'>Isikan pesan sekurangnya 15 karakter</span>");
                    }
    
    
                    $button.attr("role", "off");
                    $form.find(".error").eq(0).focus();
                    return false;
                }
    
                //submit
                var $t = sendFormPost($form)
                .success(function(n){
                    console.log(n);
                    // alert message
                    $form.find(".form-control").val("");
                    $form.find("*[name='type']").val("-1");
                    $button.attr("role", "off");
                    toastr.success(n.message);
                })
                .error(function(n){
                    console.log(n);
                    var $message = n.responseJSON.message;
                    $button.attr("role", "off");
                    toastr.error($message);
                });
    
            }
        }
        catch(err){
            console.log(err);
            $button.attr("role","off");
            toastr.error('ErrorCode(500): ' + err);
            return false;
        }

        return false;
    });


    return false;
})
</script>
@endsection