<?php
require "head.php";
?>

<body class="container-fluid">
    <?php
    include "./components/navbar.php"
        ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 loginContainer">
                <div class="loginBox">
                    <h1 class="text-center text-blue display-2">Forum</h1>
                    <h3 class="text-center py-3">Login</h3>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Save my login information</label>
                        </div>
                        <button type="submit" class="btn bg-blue text-gray">Submit</button>
                        <p class="mt-5">Not a member? Click <a href="register.php">here</a> to register.</p>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <?php
    include "footer.php"
        ?>
    <?php
    include "script.php"
        ?>
</body>