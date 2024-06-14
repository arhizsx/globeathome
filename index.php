<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Aris Salvador">
        <title>Globe At Home Online</title>

        <link rel="canonical" href="https://globeathome.online/">    

        <!-- Bootstrap core CSS -->
        <!-- <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/favicon.ico">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-image:  url('/landing-pc.png');
  background-size: cover;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>    
        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">

    </head>
    <body class="text-center" data-new-gr-c-s-check-loaded="14.1181.0" data-gr-ext-installed="">    
        <main class="form-signin">
            <form action="/checker.php" method="post">
                <img class="mb-4" src="/gfibertayo.png" height="120" alt="">
                <h1 class="mb-3 fw-normal" style="font-size: 1.5rem; line-height: 2rem; --tw-text-opacity: 1; color: rgb(0 98 153 / var(--tw-text-opacity));">Number Verifier</h1>
                <div class="form-floating">
                    <input type="text" class="form-control mb-3" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Mobile Number</label>
                </div>
                <button class="w-100 btn btn-lg" type="submit" style="background-color: #ff4bce !important; color: white;">Check</button>
                <p class="mt-5 mb-3 text-muted">© Globe At Home 2024</p>
            </form>
        </main>
    </body>
</html>