<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<title>PO CAN Travel</title>
<div class="mask d-flex align-items-center h-100 gradient-custom-4">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                        @if (session()->has('success'))
                            <div class="alert alert-success col-lg-12" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <h2 class="text-uppercase text-center mb-5">MASUK</h2>

                        <form method="POST" action="/authLogin">
                            @csrf
                            <div class="form-outline mb-4">
                                <input type="text" id="username" name="username" class="form-control form-control-lg" value="{{old('username')}}" required placeholder="Username"/>
                            </div>


                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password" class="form-control form-control-lg" value="{{old('password')}}" required placeholder="Password"/>
                            </div>

                            
                            <div class="d-flex justify-content-center">
                              <button type="submit"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Masuk</button>
                            </div>

                            <p class="text-center text-muted mt-5 mb-0">Belum memiliki akun? <a href="/register"
                                    class="fw-bold text-body"><u>Daftar</u></a></p>
                            <p class="text-center text-muted mb-0">
                                <a href="/login-admin" class="fw-bold text-body"><u>Masuk Sebagai Admin</u></a>
                            </p>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .gradient-custom-4 {
        background: #84fab0;
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }
</style>
