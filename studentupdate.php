<form  method="post" action="updatenewsdb.php" align="center"  enctype="multipart/form-data">

        <?php
			
		$cn=mysqli_connect("localhost","root","");
		mysqli_select_db($cn,"student");
		if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		$res=mysqli_query($cn,"select * from newshead  where id=$id");
	
					while($data=mysqli_fetch_array($res))
					{
					
				?>

<input type="hidden" name="t1" height="20px" width="20px" value='<?php echo $data['id']; ?>'>
<input type="text" name="t2" placeholder="Student Name" value='<?php echo $data['info']; ?>'required>
<input type="file" name="t7" placeholder="" value='<?php echo $data['infoimg']; ?>'required>

<!--<select name="t4"  required>
				
				<option><?php// echo $data['subjects']; ?></option>
				<?php 
					//	$cn=mysqli_connect("localhost","root","");
						//mysqli_select_db($cn,"students");
						//$x=mysqli_query($cn,"select id, subjects from student");
						//while ($row=mysqli_fetch_array($x)){
						//echo "<option value=".$row['subjects'].">".$row['subjects']."</option>";
						//}
					?>
					</select>-->		
<input type="submit" value="save" name="news" style="margin-left:10%;">
<?php
}
}
?>
</form>