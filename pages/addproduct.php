<?php

include('../templates/mStart.php');
include('../templates/header.php');
    
?>

    <div class="container">
  
      <section class="panel-default">
    <div class="txt-align-center"> 
        <h3 class="panel-title">Add Product</h3> 
    </div> 
    <hr>
    <div class="panel-body">

    <form action="designer-finish.html" class="form-horizontal" role="form">

   <!-- <div class="form-group">
        <label for="name" class="col-sm-3 control-label"> lalala</label>
        <div class="col-sm-9">
            <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> lalala
        </label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> lalala
        </label>
        </div>
    </div> form-group // -->

       <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Product Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="name" id="name" placeholder="Cheap Laptop ASUS">
        </div>
      </div> <!-- form-group // -->
      <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Price</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="name" id="name" placeholder="300$">
        </div>
      </div> <!-- form-group // -->
      <div class="form-group">
        <label for="about" class="col-sm-3 control-label">Description</label>
        <div class="col-sm-9">
          <textarea class="form-control"></textarea>
        </div>
      </div> <!-- form-group // -->
      <!-- <div class="form-group">
        <label for="qty" class="col-sm-3 control-label">lalala</label>
        <div class="col-sm-3">
       <input type="text" class="form-control" name="qty" id="qty" placeholder="lalala">
        </div>
      </div> 
      <div class="form-group">
        <label class="col-sm-3 control-label">lalala</label>
        <div class="col-sm-3"> 
          <label class="control-label small" for="date_start">Начало: </label>
          <input type="text" class="form-control" name="date_start" id="date_start" placeholder="lalala">
        </div>
        <div class="col-sm-3">   
          <label class="control-label small" for="date_finish">lalala:</label>
          <input type="text" class="form-control" name="date_finish" id="date_finish" placeholder="lalala">
        </div>
      </div> // -->
      <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Picture</label>
        <div class="col-sm-3">
          <label class="control-label small" for="file_img">Types (jpg/png):</label> <input type="file" name="file_img">
        </div>
        <!--<div class="col-sm-3">
          <label class="control-label small" for="file_img">Файлы:</label>  <input type="file" name="file_archive">
        </div>form-group // -->
      </div>  
      <div class="form-group">
        <label for="tech" class="col-sm-3 control-label">Categories</label>
        <div class="col-sm-3">
       <select class="form-control">
        <option value="">Television</option>
        <option value="texnolog2">Computer </option>
        <option value="texnolog3">Driller </option>
       </select>
        </div>
      </div> <!-- form-group // -->
      <hr>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-primary">ADD</button>
        </div>
      </div> <!-- form-group // -->
    </form>

    </div><!-- panel-body // -->
    </section><!-- panel// -->


    </div> <!-- container// -->

<?php


include('../templates/footer.php');
include('../templates/mEnd.php');

?>