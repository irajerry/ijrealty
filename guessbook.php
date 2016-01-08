
<?php
include("dbconnect.php");

		$comment_sql = "Select * from guessbook";
		$comment_query = mysqli_query($dbconnect, $comment_sql);
		$comment_rs = mysqli_fetch_assoc($comment_query);
?>
	



<table class="guessbook">
<tr> <th> # </th> <th> Name </th> <th> Email</th> <th> Phone </th> <th> Comment</th> </tr>
<tr>
<?php
	do{
?>		
	 <td> <?php echo $comment_rs['id'];?> </td>
	 <td> <?php echo $comment_rs['name'];?> </td> 
	 <td> <?php echo $comment_rs['email'];?></td>
	 <td> <?php echo $comment_rs['phone'];?></td> 
	 <td> <?php echo $comment_rs['comment'];?></td>
 </tr>
	<?php }while($comment_rs = mysqli_fetch_assoc($comment_query))
		
	?>
	
	<?php
	
	?>
</table>

