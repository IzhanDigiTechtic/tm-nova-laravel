<?php session_start();
include("../../backend/connectiondb.php");
	include("../../includes/var.php");
	
	if(!$_SESSION["userid"] || $_SESSION['roleId']!=4){
		echo "<script>window.location = '../../logout';</script>";
	}
	
	if(isset($_GET['Id'])) { 
		$query="Update ".$table34." set ".$common7."= '0', ".$common5."='".date('Y-m-d H:i:s')."',".$common6."='".$_SESSION['userid']."'
		where ".$common7."='1' and ".$common2."='".$_GET['Id']."'";
		//echo $query;
		$vacancies=mysqli_query($con,$query);
		echo "<script>window.location = '../../reviews/list';</script>";
	}
	
	if(isset($_POST['submit'])) {
		$Id = test_input($_POST["editid"]);$title = test_input($_POST["title"]);
		
		$title = RemoveSpecialChar($title);
		
		if($Id=="0"){
			$sql = "INSERT INTO ".$table32." (".$table34Col2.",".$common1.",".$common4.")
				VALUES ( '".$title."', '".date('Y-m-d H:i:s')."','".$_SESSION["userid"]."')";
			if (mysqli_query($con,$sql)) {
				echo "<script>alert('Reviews Added');</script>";
				echo "<script>window.location = '../../reviews/list';  </script>";
			}else{
				echo "<script>alert('Something Wrong, Please Check');</script>";
			}
		}else{
			$sql = "Update ".$table34." set ".$table34Col2." = '".$title ."',
			
			".$common5." = '".date('Y-m-d H:i:s')."',
			".$common6." = '".$_SESSION["userid"]."' WHERE ".$common2."= ".$Id." ";
			if (mysqli_query($con,$sql)) {
				echo "<script>alert('Reviews Update Successfully');</script>";
				echo "<script>window.location = '../../reviews/list';  </script>";
			}else{
				echo "<script>alert('Something Wrong, Please Check');</script>";
			}
		} 
	}
	

	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("../../includes/compatibility.php") ?>
		<title>Reviews | list | Trade Mark Nova</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<?php include("../../includes/admin_styles.php") ?>
	</head>
    <body class="bg-inner-batch">
    	
    	<?php include("../../includes/admin_menu.php") ?>
    	<div class="pageTitle">
            <div class="container">
                <h2>Reviews</h2>
            </div>
        </div>
    	<section class="dashboard">	
        	<div class="container-fluid">
        		<div class="row">
    				<div class="col-lg-12">
    					<div class="table-responsive mt-0">
    						<table id="avatar_list" class="table table-bordered table-striped"  style="text-align: center;">
    							<thead>
    								<tr>
    									<th style="width:40px;color:white;">#</th>
    									<th style="text-align:left;color:white;">Name</th>
    									<th style="text-align:left;color:white;">Email</th>
    									<th style="text-align:left;color:white;">Company</th>
    									<th style="text-align:left;color:white;">Rating</th>
    									<th style="text-align:left;color:white;">Status</th>
    									<th style="text-align:left;color:white;">Description</th>
    									<th style="width:60px;color:white;">Action</th>
    								</tr>
    							</thead>
    							<tbody>
    								<?php 
    									$i=0;
    									$batch=mysqli_query($con,"Select t1.".$common2.",t1.".$common3.",t1.".$table24Col1.",t1.".$common9.",t1.".$table34Col1.",t1.".$table34Col2."
    									,t1.".$table34Col3."
    									From ".$table34." t1
    									where t1.".$common7."='1' Order by ".$common2." DESC");
    									while($item=mysqli_fetch_array($batch)){
    										$i++;
    									?>
    										<tr>
    											<td><?= $i;?></td>
    											<td style="text-align:left;"><?=$item[1]?></td>
    											<td style="text-align:left;"><?=$item[2]?></td>
    											<td style="text-align:left;"><?=$item[4]?></td>
    											<td style="text-align:left;"><?=$item[6]?></td>
    											<td style="text-align:left;"><?php if($item[5]==2){ echo "Pending"; }elseif($item[5]==1){ echo "Approved"; }else{ echo "Denied"; } ?></td>
    											<td style="text-align:left;"><?=$item[3]?></td>
    											<td>
    												<a href="javascript:void(0)" data-bs-toggle="modal" onclick="abc('<?= $item[5];?>','<?= $item[0];?>')" data-bs-target="#editBatch"><i style="color:green;" class="fa fa-magic"></i></a>&nbsp;
    												<a href="reviews/list/index.php?Id=<?=$item[0]?>"><i style="color:red;" class="fa fa-trash"></i></a>
    											</td>
    										</tr>
    									<?php
    									}
    								?>
    								
    							</tbody>
    						</table>
    					</div>
    				</div>
    			</div>
    	    </div>
    	</section>
    
        <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
        <script type="text/javascript">
        	function abc(a,c){
        		document.getElementById("editid").value=c;
        		document.getElementById("edittitle").value=a;
        	}
        	function abcadd(){
        		document.getElementById("edittitle").value="";
        		
        	}
        </script>
    
    
        <div class="modal fade" id="editBatch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:black;">Reviews</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="reviews/list/index.php" method="POST" enctype="multipart/form-data">
        		  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Title:</label>
                    <!--<input type="text" id="edittitle" placeholder="Title..." name="title" class="form-control" required>-->
                    <select id="edittitle" name="title">
                        <option value="1">Approve</option>
                        <option value="2">Pending</option>
                        <option value="3">Denied</option>
                    </select>
                  </div>
        
        		  <br/>
                  <input type="hidden" id="editid" name="editid" class="form-control">
              </div>
              
              <div class="modal-footer">
                <button type="button" class="button-round" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="button-round">Save</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        
        <?php include("../../includes/admin_footer.php") ?>
    	<?php include("../../includes/admin_scripts.php") ?>
        <script>
            $(document).ready(function() {
                $('#avatar_list').DataTable({
                    dom: 'Bfrtip',
                    footer: true,
                    buttons: [
                      
                    ],
                    "iDisplayLength": 10,
                });
            });
        </script>
    </body>
</html>