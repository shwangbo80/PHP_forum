<?php
include "connection.php";

// $sql = "SELECT id, username, lastname, password FROM user ORDER BY `id`";
// $result = $conn->query($sql);
?>
<?php
include "head.php"
    ?>

<body class="container-fluid">
    <?php
    include "./components/navbar.php"
        ?>
    <div class="container">
        <div class="categoryContainer my-4">
            <div class="bg-blue text-gray px-4 py-3">
                <div class="row">
                    <div class="col-sm-7 col-md-7">Main Category</div>
                    <div class="col-md-1 d-none d-md-block text-center">Topics</div>
                    <div class="col-md-1 d-none d-md-block text-center">Posts</div>
                    <div class="col-sm-5 col-md-3 d-none d-sm-block">Last Post</div>
                </div>
            </div>
            <div class="categoryBox bg-gray text-blue px-4">
                <div class="row py-3">
                    <div class="col-sm-7 col-md-7">
                        <div class="fw-bold text-blue"><a href="google.com">category 1</a></div>
                        <div>category 1 description</div>
                    </div>
                    <div class="col-md-1 d-none d-md-block text-center">5</div>
                    <div class="col-md-1 d-none d-md-block text-center">125</div>
                    <div class="col-sm-5 col-md-3 d-none d-sm-block">
                        <div class="fw-bold text-blue"><a href="google.com">Title</a></div>
                        <div>escription</div>
                    </div>
                </div>
                <hr />
            </div>
            <div class="categoryBox bg-gray text-blue px-4">
                <div class="row py-3">
                    <div class="col-sm-7 col-md-7">
                        <div class="fw-bold text-blue"><a href="google.com">category 1</a></div>
                        <div>category 1 description</div>
                    </div>
                    <div class="col-md-1 d-none d-md-block text-center">5</div>
                    <div class="col-md-1 d-none d-md-block text-center">125</div>
                    <div class="col-sm-5 col-md-3 d-none d-sm-block">
                        <div class="fw-bold text-blue"><a href="google.com">Title</a></div>
                        <div>escription</div>
                    </div>
                </div>
                <hr />
            </div>
            <div class="categoryBox bg-gray text-blue px-4">
                <div class="row py-3">
                    <div class="col-sm-7 col-md-7">
                        <div class="fw-bold text-blue"><a href="google.com">category 1</a></div>
                        <div>category 1 description</div>
                    </div>
                    <div class="col-md-1 d-none d-md-block text-center">5</div>
                    <div class="col-md-1 d-none d-md-block text-center">125</div>
                    <div class="col-sm-5 col-md-3 d-none d-sm-block">
                        <div class="fw-bold text-blue"><a href="google.com">Title</a></div>
                        <div>escription</div>
                    </div>
                </div>
                <hr />
            </div>
            <div class="categoryBox bg-gray text-blue px-4">
                <div class="row py-3">
                    <div class="col-sm-7 col-md-7">
                        <div class="fw-bold text-blue"><a href="google.com">category 1</a></div>
                        <div>category 1 description</div>
                    </div>
                    <div class="col-md-1 d-none d-md-block text-center">5</div>
                    <div class="col-md-1 d-none d-md-block text-center">125</div>
                    <div class="col-sm-5 col-md-3 d-none d-sm-block">
                        <div class="fw-bold text-blue"><a href="google.com">Title</a></div>
                        <div>escription</div>
                    </div>
                </div>
                <hr />
            </div>


            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <?php
        // if ($result->num_rows > 0) {
        //     while ($row = $result->fetch_assoc()) {
        //         echo "Username: <a href='./user.php?username=$row[username]'>$row[username] $row[lastname]</a><br />";
        //     }
        // } else {
        //     echo "0 results";
        // }
        ?>

        <!-- <form action="post.php" method="post">
            Username: <input type="text" name="username"><br>
            Lastname: <input type="text" name="lastname"><br>
            Password: <input type="text" name="password"><br>
            <button type='submit'>Register</button>
        </form> -->
    </div>
    <?php
    include "footer.php"
        ?>
    <?php
    include "script.php"
        ?>
</body>