<?php include './includes/admin_header.php'; ?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include './includes/sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
              <?php include './includes/topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Welcome to Admin <small><?php echo $_SESSION['username']; ?></small></h1>
                   
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">

                            <a href="./posts.php">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Posts</div>

                                                <?php 
                                                
                                                    $query = "SELECT * FROM works";
                                                    $select_all_posts = mysqli_query($connection, $query);
                                                    $post_counts = mysqli_num_rows($select_all_posts);
                                                    echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$post_counts</div>";
                                                
                                                ?>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            
                        </div>

                       


                       
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                    </div>

                    <!-- Content Row -->
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include './includes/admin_footer.php'; ?>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        //   ['Data', 'Count'],

          <?php

            $element_text = ['Active Posts', 'Categories', 'Users', 'Comments'];
            $element_count = [$post_count, $category_counts, $users_counts, $comments_counts];

            for($i = 0; $i<4;$i++){
                echo "['$element_text[$i]']" . "," . "[$element_count[$i]],";
            }
          
          
          ?>



        //   ['Posts', 1000]
        ]);

        var options = {
          chart: {
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>