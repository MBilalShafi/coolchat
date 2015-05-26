<html>
<head>
    <meta charset="utf-8"/>
    
    <title>Home</title>
	
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS STYLE SHEET -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES -->
    <link href="assets/css/style.css" rel="stylesheet" />
	
	<link href="assets/css/coolchat.css" rel="stylesheet" />
	<link href="assets/css/skin-yellow-light.css" rel="stylesheet" />
	
	
	<script src="assets/js/jquery-1.11.1.js"></script>
    <!-- REQUIRED BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    
    <!-- SCROLLING SCRIPTS PLUGIN  -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="assets/js/custom.js"></script>

       

		<script language="javascript">
function confirmLink(question, url)
{
    var is_confirmed = confirm(question);
    if (is_confirmed && url != '')
        window.location = home.php;
    return is_confirmed;
}



		</script>
		
<style>

</style>
</head>
<body class="skin-yellow-light">
    <div class="wrapper">
	 <!-- --------------------------header Start------------------------------->
    
    <?php
	include("topheader.php");
	?> <!-- end----->

	  <!-- -------------------------Sidebar starts---------------------------->
	  <?php
	include("homesidebar.php");
	?> <!-- end----->
      
	  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <table class="table">
    
      <tr class="danger">
	  <th> </th>
		<th> ID </th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
		<th>Password</th>
		<th>D_O_B</th>
		<th colspan="2">Actions</th>
		
      </tr>
   
<?php
 include("connection.php");
$query="SELECT * from users";
$res= mysql_query("$query");
 
 while($rows= mysql_fetch_array($res))
 {
?>
    <tbody> 
      <tr class="success">
	  <td> <input type="checkbox" id="checkbox"> </td>
	  <td> <?php echo"$rows[id]"; ?> </td>
        <td> <?php echo"$rows[First_name]"; ?></td>
		 <td><?php echo"$rows[Last_name]";   ?></td>
        <td><?php echo"$rows[Email]";  ?></td>
		<td><?php echo"$rows[Password]";   ?></td>
		<td><?php echo"$rows[D_O_B]";   ?></td>
		<td>EDIT  <i class="fa fa-file-text"></i></td>
		<td><a onclick="javascript:confirmLink('Are you sure you want to delete this user record?', 'home.php?del_id=<?php echo $row['id']?>')" href="delete.php">DELETE  <i class="fa fa-close"></i> </a></td>
      </tr>
  <?php 
}  
?>  
    </tbody>
  </table>
  
  		<!-- Section / content-header ends here----------->
        </section>
      <!-- -------Content-wrapper ends here------------->
		</div>

	  </div>
	  
	  
    <!-- WRAPPER CLass ends here---------->
	  </div>
	</body>
</html>  