function ajaxFunction(data){

       const ajaxReq = new XMLHttpRequest();
       ajaxReq.open('GET', 'https://localhost/modals/getdata.php?selectvalue='+data, true);
        
       
       ajaxReq.send();


       ajaxReq.onload = function(){
           if(ajaxReq.readyState == 4 && ajaxReq.status == 200){
                document.getElementById('editModalGrad').innerHTML = ajaxReq.responseText;
           }
        }
    //    ajaxReq.onreadystatechange = function(){
    //        if(ajaxReq.readyState == 4 && ajaxReq.status == 200){
    //             document.getElementById('grad').innerHTML = ajaxReq.responseText;
    //        }
    //    }
   }