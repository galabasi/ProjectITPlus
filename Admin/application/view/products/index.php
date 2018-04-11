
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">List Province</h3>
    </div>
    <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
               <tr role="row">
                <th>#</th>
                <th>name_product</th>
                <th>category</th>
                <th>price</th>
                <th>sale</th>
                <th>brand</th>
                <th>description</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php  
                  foreach ($products as $product) {
                ?>
                 <tr>
                   <td><?php if (isset($product->id_product)) echo htmlspecialchars($product->id_product, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($product->name_product)) echo htmlspecialchars($product->name_product, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($product->id_category)) echo htmlspecialchars($product->id_category, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($product->price)) echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($product->sale)) echo htmlspecialchars($product->sale, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($product->id_brand)) echo htmlspecialchars($product->id_brand, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($product->description)) echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($product->status)) echo htmlspecialchars($product->status, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <a href="<?php echo "index.php?view=editProvince&province_id=".$row["province_id"] ?>" class="btn btn-primary btn-xs">Edit</a>
                        <button class="btn btn-danger btn-xs" onclick="delete1(<?php echo $row["province_id"] ?>);">Delete</button>
                      
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
  </div>
</div>
