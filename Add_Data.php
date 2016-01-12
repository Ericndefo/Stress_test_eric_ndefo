<?php
include_once 'db_Config.php';
if(isset($_POST['btn-save']))
{
 
 
 $email = $_POST['email_id'];

 
 if($crud->create($email))
 {
  header("Location: Add_Data.php?inserted");
 }
 else
 {
  header("Location: Add_Data.php?failure");
 }
}
?>
<?php include_once 'header.php'; ?>
<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
 ?>
    <div class="container">
 <div class="alert alert-info">
    <strong>WOW!</strong> Données bien inserées <a href="index.php">HOME</a>!
 </div>
 </div>
    <?php
}
else if(isset($_GET['failure']))
{
 ?>
    <div class="container">
 <div class="alert alert-warning">
    <strong>SORRY!</strong> erreur d'insertion de donnée !
 </div>
 </div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">

  
  <form method='post'>
 
    <table class='table table-bordered'>
 
        
 
        <tr>
            <td>Your E-mail ID</td>
            <td><input type='text' name='email_id' class='form-control' required></td>
        </tr>
 
        
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
      <span class="glyphicon glyphicon-plus"></span> Ajouter Nouveau
   </button>  
            <a href="register.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Retour</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>