<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cau 2</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Index</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link pr-5 pl-5" href="cau1_a.php">Câu 1_a</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link pr-5" href="cau1_b.php">Câu 1_b</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link pr-5" href="cau2.php">Câu 2</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
    <section class="p-4 bg-info text-white">
        <div class="container mt-5" style="height:530px ;">
            <h1 style="text-align: center;padding-bottom: 20px; color: black;font-size: 50px;">Contact</h1>
            <form id="data" method="post">
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label for="exampleInputEmail1">Full name</label>
                        <input type="text" name="name" class="form-control" id="name" value="" placeholder="Full name">
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="exampleInputEmail1">Email </label>
                        <input type="email" name="email" class="form-control" id="email" value="" placeholder="Email">

                    </div>
                    <div class="form-group col-sm-3">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="number" name="phone" id="phone" class="form-control" value="" placeholder="Phone" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Content</label>
                        <textarea type="text" name="content" id="content" class="form-control" placeholder="Content"></textarea>
                    </div>
                </div>
                <input type="submit" class="btn btn-success mr-4" value="Add" id="Add" />
                <input type="submit" class="btn btn-danger" value="Clear" id="Clear" />
            </form>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#Add").click(function() {

                var formData = $('#data').serialize();
                var name = $("#name").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var content = $("#content").val();

                if (name == "" || email == "" || phone == "" || content == "") {
                    alert("Please Fill All Fields");
                } else {
                    $.ajax({
                        type: "POST",
                        url: "connection.php",
                        data: formData,
                        success: function(result) {
                            alert("Add successfully");

                        }
                    });
                }
                return false;

            });
        });
        $('#Clear').click(function(ev) {
            ev.preventDefault();
            $("#name").val('');
            $("#email").val('');
            $("#phone").val('');
            $("#content").val('');
        })
    </script>


</body>

</html>