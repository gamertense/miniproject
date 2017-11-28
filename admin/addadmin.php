<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Admin</title>
</head>
<body>
<?php
require_once('navbar.php');


?>
<!-- login -->
<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Add administrator
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <input name="name" id="first_name" class="form-control input-sm"
                                   placeholder="First Name" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm"
                                   placeholder="Email Address" required>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm"
                                           placeholder="Password" required>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                           class="form-control input-sm" placeholder="Confirm Password" required>
                                </div>
                            </div>
                        </div>

                        <input type="submit" name="Register" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script>
    $(document).ready(function () {
        $("input[name='name']").bind('keyup blur', function () {
                var node = $(this);
                node.val(node.val().replace(/[^A-Za-z\s]/g, ''));
            }
        );
    });
    
    $('#menu5').addClass('active');
    $('#deliveryTable').DataTable();


</script>