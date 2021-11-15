<?php

include 'modall_functions.php';

    $val = $_GET['selectvalue'];

    $countries = getCountries();
    $cities = getCities();

    for($i = 0; $i < count($countries); $i++){
                if($countries[$i]['name'] == $val){
                    for ($j=0; $j<count($cities); $j++){
                        if ($countries[$i]['id']==$cities[$j]['country_id'])
                             { echo "<option value=\"".$cities[$j]['name']."\">  ".$cities[$j]['name']." </option>";}
              
            }
        }
        else {
            echo "<option value=\"\">  </option>";
        }
    }
?>