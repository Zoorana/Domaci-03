<?php
    require 'modall_functions.php';
?>  
<div class="modal fade" id="editUserModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Izmjena korisnika</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="./update_user.php" method="POST">
          <input type="hidden" name="id" id="id">
          <div class="row">
              <div class="col-12">
                  <input type="text" name="first_name" id="editModalFirstName" class="form-control" placeholder="Unesite ime">
              </div>
              <div class="col-12 mt-3">
                  <input type="text" name="last_name" id="editModalLastName" class="form-control" placeholder="Unesite prezime">
              </div>
              <div class="col-12 mt-3">
                  <input type="email" name="email" id="editModalEmail" class="form-control" placeholder="Unesite e-mail adresu">
              </div>
              <div class="col-12 mt-3">
                        <label for="editModalDrzava">Izaberite drzavu:</label>
                        <select id="editModalDrzava" name="drzava" class="form-control" onchange="ajaxFunction(this.value)">
                            <?php
                                    $countries = getCountries();

                                    for($i = 0; $i < count($countries); $i++){
                                        echo "<option  value=\"".$countries[$i]['name']."\">  ".$countries[$i]['name']." </option>";
                                    }
                            ?>
                        </select>
              </div>
              <div class="col-12 mt-3">
                        <label for="editModalGrad">Izaberite grad:</label>
                        <select id="editModalGrad" name="drzava" class="form-control"></select>
              </div> 
          </div>

          <div class="row mt-3">
              <div class="col-4 offset-4">
                  <button class="btn btn-success w-100">Dodaj korisnika</button>
              </div>
          </div>
      </form>

      </div>
    </div>
  </div>
</div>