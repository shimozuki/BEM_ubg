<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Template Website</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_templatewebsite',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_templates]'>
                    <tr><th width='120px' scope='row'>Judul</th>  <td><input type='text' class='form-control' name='a' value='$rows[judul]' required></td></tr>
                    <tr><th scope='row'>Pembuat</th>              <td><input type='text' class='form-control' name='b' value='$rows[pembuat]' required></td></tr>
                    <tr><th scope='row'>Folder</th>               <td><input type='text' class='form-control' name='c'  value='$rows[folder]' required></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <button type='button' class='btn btn-default pull-right' onclick='javascript:history.back()'>Cancel</button>
                    
                  </div>
            </div></div></div>";
            echo form_close();
