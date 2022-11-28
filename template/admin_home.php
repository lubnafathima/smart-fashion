<?php
session_start();
require_once 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Smart Fashion</title>
    <link rel="stylesheet" href="../static/admin.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body> 
    <div class="container mt-5 mb-5">
        <div class="row no-gutters">
            <div class="col-md-4 col-lg-4"><img src="../img/favicon.png" class="w-100 h-75"></div>
            <div class="col-md-8 col-lg-8">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row justify-content-between align-items-center px-5 py-4 bg-dark text-white">
                        <h3 class="display-5">Welcome, Admin</h3>
                        <a href="logout.php" class="btn btn-primary">Logout</a>
                    </div>
                    <div class="p-4 bg-black text-white">
                        <h6>200+ Online <i class="fa fa-circle text-success" aria-hidden="true"></i></h6>
                    </div>
                    <div class="d-flex flex-row text-white">
                        <div class="p-4 bg-primary text-center skill-block">
                            <h4>10K+</h4>
                            <h6>Customer</h6>
                        </div>
                        <div class="p-3 bg-success text-center skill-block">
                            <h4>2L+</h4>
                            <h6>Order</h6>
                        </div>
                        <div class="p-3 bg-warning text-center skill-block">
                            <h4>4.3</h4>
                            <h6>Rating</h6>
                        </div>
                        <div class="p-3 bg-danger text-center skill-block">
                            <h4>5+ years</h4>
                            <h6>of service</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- User list -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                    <th><span>User</span></th>
                                    <th><span>Created</span></th>
                                    <th class="text-center"><span>Status</span></th>
                                    <th><span>Email</span></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM registration";
                                $sql_data = $con->query($sql);
                                while($sql_row = mysqli_fetch_assoc($sql_data)) {?>
                                    <tr>
                                        <td>
                                            <img src="<?php echo $sql_row['profile']; ?>" alt="" style="border-radius: 50%; height: 5em;">
                                            <a href="#" class="user-link"><?php echo $sql_row['username']; ?></a>
                                            <span class="user-subhead">User</span>
                                        </td>
                                        <td>
                                            2013/08/08
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-default">Inactive</span>
                                        </td>
                                        <td>
                                            <a href="#"><?php echo $sql_row['email']; ?></a>
                                        </td>
                                        <td style="width: 20%;">
                                            <a href="admin_userOrders.php?username=<?php echo $sql_row['username']; ?>" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                            <a href="#" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                            <a href="#" class="table-link danger">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>