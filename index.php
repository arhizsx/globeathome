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
                opacity: 0.5;
            }

            .form-signin {
                width: 100%;
                max-width: 330px;
                padding: 15px;
                margin: auto;
            }
                
            .form-signin .form-floating:focus-within {
                z-index: 2;
            }
            
        </style>    
        <!-- Custom styles for this template -->
        <!-- <link href="/template.css" rel="stylesheet"> -->

    </head>
    <body class="text-center" data-new-gr-c-s-check-loaded="14.1181.0" data-gr-ext-installed="">    
        <main class="form-signin">
            <form action="/checker.php" method="post">
                <img class="mb-4" src="/gfiberplan.png" height="120" alt="">
                <h1 class="mb-3 fw-normal" style="font-size: 1.5rem; line-height: 2rem; --tw-text-opacity: 1; color: rgb(0 98 153 / var(--tw-text-opacity));">Number Verifier</h1>
                <div class="form-floating  mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="09178761234" name="cellnumber">
                    <label for="floatingInput">Mobile Number</label>
                    <small>Please use this format 09178761234</small>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Check</button>
                <p class="mt-5 mb-3 text-muted">© Globe At Home 2024</p>
            </form>
        </main>
    </body>
</html>