<?php
include_once 'db_Config.php';
?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<a href="Add_Data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Ajouter</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
     <table class='table table-bordered table-responsive'>
     <tr>
     <th>#</th>
     
     <th>Last Name</th>
     <th>E - mail ID</th>
     <th>Contact No</th>
     <th colspan="2" align="center">Actions</th>
     </tr>
     <?php
  $query = "SELECT * FROM tbl_users";       
  $records_per_page=10;
  $newquery = $crud->paging($query,$records_per_page);
  $crud->dataview($newquery);
  ?>
    <tr>
        <td colspan="7" align="center">
    <div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
         </div>
        </td>
    </tr>
 
</table>
   <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Retour</a>
       
</div>

<?php include_once 'footer.php'; ?>