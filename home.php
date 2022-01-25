 
        <header class="masthead">
            
        </header>
	<section class="page-section">
        </section>
	<div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                	<?php 
                	include'admin/db_connect.php';
                	$qry = $conn->query("SELECT * FROM  room_categories order by rand() ");
                	while($row = $qry->fetch_assoc()):
                	?>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="#">
                            <img class="img-fluid" src="assets/img/<?php echo $row['cover_img'] ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-30"><?php echo "$ ".number_format($row['price'],2) ?> per day</div>
                                <div class="project-name"><?php echo $row['name'] ?></div>
                            </div>
                        </a>
                    </div>
                	<?php endwhile; ?>

                </div>
            </div>
        </div>
