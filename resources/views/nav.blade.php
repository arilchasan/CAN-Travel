<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body,
    ul {
        margin: 0;
        padding: 0;
        font-family: 'Popins', sans-serif;
    }

    nav {
        background-color: #186F65;
        color: #fff;
        height: 10%;
    }

    .menu-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        margin-top: 5px;
    }

    .menu {
        list-style-type: none;
        display: flex;
        justify-content: center;
        color: #fff;
    }

    .login-register {
        display: flex;

    }

    .btn-success {
        color: #fff;
        background-color: #186F65;
        border: #186F65;
    }

    .btn-success:hover {
        background-color: #186F65;
        color: #ffffff;
        border: #186F65
    }
    .btn-warning {
        color: rgb(0, 0, 0)
    }

    .btn-warning:hover {
        background-color: #186F65;
        color: #ffc107;
    }

    .container {
        width: 90%;
        margin: 0 auto;
        padding: 15px 0;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    h1 {
        font-size: 22px;
        font-style: italic;
        font-weight: 600;
        font-family: 'Popins', sans-serif;
    }

    li {
        margin-right: 20px;
    }

    li a {
        text-decoration: none;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        font-family: 'Popins', sans-serif;
    }

    li a:hover {
        color: #ffffff;
        border-bottom: 2px solid #ffc107;
    }
</style>

<body>
    <nav>
        <div class="container">
            <div class="menu-container">
                <h1>PO CAN Travel</h1>
                <ul class="menu">
                    <li><a href="/">Beranda</a></li>
                </ul>
                @auth
                <div class="dropdown">
                    <a class="btn btn-success dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Hai, {{ Auth()->user()->username }}
                    </a>
                  
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="/tiket-saya">Tiket</a></li>
                      <li><form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit" >Logout</button></li>
                    </form>
                    </ul>
                  </div>
                   
                @else
                    <div class="login-register">
                        <a href="/login" class="btn btn-warning mx-1">Login</a>
                        <a href="/register" class="btn btn-outline-warning">Register</a>
                    </div>
                    @endif


                </div>
            </div>
        </nav>

    </body>
