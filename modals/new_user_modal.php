 <!-- ?php
    require 'modall_functions.php';
?>  -->

<div class="modal fade" id="newUserModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dodavanje korisnika</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="./add_new_user.php" method="POST">
          <div class="row">
              <div class="col-12">
                  <input type="text" name="first_name" class="form-control" placeholder="Unesite ime">
              </div>
              <div class="col-12 mt-3">
                  <input type="text" name="last_name" class="form-control" placeholder="Unesite prezime">
              </div>
              <div class="col-12 mt-3">
                  <input type="email" name="email" class="form-control" placeholder="Unesite e-mail adresu">
              </div>
              <div class="col-12 mt-3">
              <label for="drzava">Izaberite drzavu:</label>
                  <select id="drzava" name="drzava" class="form-control">
                        <!-- ?php
                        // onchange="ajaxFunction($countries[$i]['id'])"    onchange="ajaxFunction(this.value)"
                           $countries = getCountries();

                           
                           echo "<option value=\"\" id=\"0\"> Izaberi drzavu </option>"; 
                           for($i = 0; $i < count($countries); $i++){
                               echo "<option  id=\"".$countries[$i]['id']."\"  value=\"".$countries[$i]['name']."\">  ".$countries[$i]['name']." </option>";
                           }

                       ?>   -->
                </select>
              </div>
              <div class="col-12 mt-3">
              <label for="grad">Izaberite grad:</label>
              <select id="grad" name="grad" class="form-control">
                   <!-- <option value="">Izaberi grad</option> -->
                   

                        <!-- //echo "<option value=\"\"> Izaberi grad </option>";

                        //    $cities = getCities();

                        //     
                        //    for($i = 0; $i < count($cities); $i++){
                        //        echo "<option value=\"".$cities[$i]['name']."\">  ".$cities[$i]['name']." </option>";
                        //    }

                         --> 
                </select>
              </div>
              <div class="col-12 mt-3">
                  <input type="password" name="password" class="form-control" placeholder="Unesite lozinku">
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
