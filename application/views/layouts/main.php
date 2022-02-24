<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <a href="index.php">
        <title>myTodo Task Manager</title>
    </a>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="#">myTodo</a>
                <div class="nav-collapse collapse">
                    <p class="navbar-text pull-right">
                        <!--RIGHT TOP CONTENT-->

                    </p>
                    <ul class="nav">

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class=" ">

                <!--/span-->

                <div class=" ">
                    <!--MAIN CONTENT-->
                    <?php $this->load->view($main_content); ?>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <hr>

            <footer>
                <p>&copy; Copyright 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->
</body>

</html>