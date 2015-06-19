<?php 

  include '../php/conexion.php';
  // include '../php/reader.php';
  include '../php/frontpagecontent.php';
  mysqli_set_charset($dbconnect,'utf8');


 ?>
<!-- Modals Edits -->
<form action="php/insertfrontpagecontent.php" method="post">
<div class="modal fade" id="modalno1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $titlea; ?></h4>
      </div>
      <div class="modal-body">
        <h3>Title</h3> 
        <input type="text" name="iptitle1" value="" placeholder="FONT PAGE TITLE HERE" id="iptitle">
        <h3>Content</h3> 
        <textarea class="form-control" name="ipcontent1" rows="4" placeholder="FONT PAGE CONTENT HERE"></textarea>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-default" name="send" value="Save">
        
      </div>
    </div>
  </div>
</div>
</form>
<!-- End Models -->

<!-- Modals Edits -->

<div class="modal fade" id="modalno2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $titleb ?></h4>
      </div>
      <div class="modal-body">
        <h3>Title</h3> 
        <input type="text" name="iptitle2" value="" placeholder="FONT PAGE TITLE HERE" id="iptitle">
        <h3>Content</h3> 
        <textarea class="form-control" name="ipcontent2" rows="4" placeholder="FONT PAGE CONTENT HERE"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- End Models -->

<!-- Modals Edits -->
<div class="modal fade" id="modalno3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $titlec ?></h4>
      </div>
      <div class="modal-body">
        <h3>Title</h3> 
        <input type="text" name="iptitle3" value="" placeholder="FONT PAGE TITLE HERE" id="iptitle">
        <h3>Content</h3> 
        <textarea class="form-control" name="ipcontent3" rows="4" placeholder="FONT PAGE CONTENT HERE"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- End Models -->