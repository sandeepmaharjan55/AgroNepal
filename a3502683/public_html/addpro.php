
<?php include('./header.php');?>
<div class="wrapper">

<div class="section group">
  <div class="col span_2_of_3">
    <div class="contact-form">
      <h2>ADD PRODUCT</h2>
      <form action="uppro.php" method="post" enctype="multipart/form-data">
        <div style="float:right">
          <input type="file" name="photo" id="photo" />
        </div>
        <div> <span>
          <label>Item Name</label>
          </span>
          <span>
          <input type="text" value="" style="width:250px;" name="itemname" />
        </span>
        </div>
        <div> <span>
          <label>CATEGORY</label>
          </span> <span>
            <select class="category" name ="category">
              <option value="Mobile Phones">Seeds	</option>
              <option value="Laptop">Machineries</option>
              <option value="Accessories">Fertilizer</option>
              <option value="Select"  selected="selected">Select</option>
            </select>
          </span> </div>
        <div> <span>
          <label>PRICE</label>
          </span> <span>
            <input type="text" style="width:250px; " name="price" value="" />
          </span> </div>
          <div> <span>
          <label>QUANTITY</label>
          </span> <span>
            <input type="text" style="width:250px; " name="quantity" value="" />
          </span> </div>
        <div> <span>
          <label>DESCRPTION</label>
          </span> <span>
            <textarea name="desc"> </textarea>
          </span> </div>
        <div> <span>
          <input type="submit" value="SUBMIT" name = "submit" />
        </span> </div>
      </form>
    </div>
  </div>
</div>
                  </div>
<?php include('./footer.php');?>