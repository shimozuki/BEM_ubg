<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Info</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_sekilasinfo',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th scope='row' width='120px'>Tulis Info</th>             <td><textarea class='form-control' name='a' style='height:200px' required></textarea></td></tr>
                    <tr><th scope='row'>Foto</th>                     <td><input type='file' class='form-control' name='b'></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <button type='button' class='btn btn-default pull-right' onclick='javascript:history.back()'>Cancel</button>
                    
                  </div>
            </div></div></div>";
            echo form_close();
