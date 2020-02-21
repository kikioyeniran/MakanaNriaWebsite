<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
 include("includes/header.php")
?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-name">Home</h2>
                        <p class="pageheader-text">Edit</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Edit Portfolio Post</h5>
                            <div class="card-body">
                                <!-- ===============EDIT portfolio==========================-->
                                <?php
                                    if(isset($_GET['portfolio'])){
                                    $id = $_GET['portfolio'];
                                    $query = "SELECT * FROM portfolio WHERE id = {$id} ORDER BY id ASC";
                                    $result = $mysqli->query($query) or die($mysqli->error);
                                    $row = $result->fetch_assoc();
                                ?>
                                <form method="post" enctype="multipart/form-data" action="update.php?portfolio=<?php echo $_GET['portfolio']?>">
                                    <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Name</label>
                                            <input id="inputText3" type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label"> Select Project Category</label>
                                            <select class="form-control" name="category">
                                                <option value="Real Estate">Real Estate</option>
                                                <option value="Media and Marketing">Media and Marketing</option>
                                                <option value="Human Resources">Human Resources</option>
                                            </select>
                                        </div>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="image">
                                            <br/>
                                            <label class="custom-file-label" for="customFile">Select Picture</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Short Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="description"><?php echo $row['description'];?></textarea>
                                        </div>
                                        <input type ="submit" name = "upd_portfolio" id= "upd_portfolio" value="Update" class="btn btn-primary" />
                                    </form>
                                <?php
                                    }
                                ?>



                                <!-- ===============EDIT SPADE==========================-->
                                <?php
                                    if(isset($_GET['spade'])){
                                    $id = $_GET['spade'];
                                    $query = "SELECT * FROM spade WHERE id = {$id} ORDER BY id ASC";
                                    $result = $mysqli->query($query) or die($mysqli->error);
                                    $row = $result->fetch_assoc();
                                ?>
                                <form method="post" enctype="multipart/form-data" action="update.php?spade=<?php echo $_GET['spade']?>">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Title</label>
                                            <input id="inputText3" type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Category</label>
                                            <input id="inputText3" type="text" class="form-control" name="category" value="<?php echo $row['category'];?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Select Date</label>
                                        <div class="input-group date" id="datetimepicker10" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker10" name="dt" value="<?php echo $row['dt'];?>"/>
                                        <div class="input-group-append" data-target="#datetimepicker10" data-toggle="datetimepicker">
                                            <div classs="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                        </div>
                                        </div>
                                        </div>
                                        <script type="text/javascript">
                                        </script>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="image">
                                            <br/>
                                            <label class="custom-file-label" for="customFile">Select Picture</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Short Summary</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="summary"><?php echo $row['summary'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Main spade Post</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="main_post"><?php echo $row['main_post'];?></textarea>
                                        </div>
                                        <input type ="submit" name = "upd_spade" id= "upd_spade" value="Update" class="btn btn-primary" />
                                    </form>
                                <?php
                                    }
                                ?>

                                <!-- ===============EDIT POETRY==========================-->
                                <?php
                                    if(isset($_GET['poetry'])){
                                    $id = $_GET['poetry'];
                                    $query = "SELECT * FROM poetry WHERE id = {$id} ORDER BY id ASC";
                                    $result = $mysqli->query($query) or die($mysqli->error);
                                    $row = $result->fetch_assoc();
                                ?>
                                <form method="post" enctype="multipart/form-data" action="update.php?poetry=<?php echo $_GET['poetry']?>">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Title</label>
                                            <input id="inputText3" type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Author</label>
                                            <input id="inputText3" type="text" class="form-control" name="author" value="<?php echo $row['author'];?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Select Date</label>
                                        <div class="input-group date" id="datetimepicker10" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker10" name="dt" value="<?php echo $row['dt'];?>"/>
                                        <div class="input-group-append" data-target="#datetimepicker10" data-toggle="datetimepicker">
                                            <div classs="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                        </div>
                                        </div>
                                        </div>
                                        <script type="text/javascript">
                                        </script>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="image">
                                            <br/>
                                            <label class="custom-file-label" for="customFile">Select Picture</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Short Summary</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="summary"><?php echo $row['summary'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Main Poetry Post</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="main_post"><?php echo $row['main_post'];?></textarea>
                                        </div>
                                        <input type ="submit" name = "upd_poetry" id= "upd_poetry" value="Update" class="btn btn-primary" />
                                    </form>
                                <?php
                                    }
                                ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
     include("includes/footer.php");
?>