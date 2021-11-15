var dodaj = {
    init: function () {
        var that = this;
        this.ucitajDrzavu();
        document.getElementById('drzava').addEventListener('change', function () {
            that.ucitajGrad(this.value);
        });

},

ucitajDrzavu: function () {
    var ajaxReq = new XMLHttpRequest();
    ajaxReq.open('GET', 'countries.txt', true);
    ajaxReq.onload = function () {
        var countries = JSON.parse(ajaxReq.responseText);
        countries.forEach(function(value){
            var op = document.createElement('option');
            op.innerText = value.name;
            op.setAttribute('value', value.id);    // ako umjesto value.id stavim value.name sto mi se cini logicnije, tada se ne desava nista
            document.getElementById('drzava').appendChild(op);
        });
    }
    ajaxReq.send();
},

ucitajGrad: function(id){
    var ajaxReq = new XMLHttpRequest();
    ajaxReq.open('GET', 'cities.txt', true);
    ajaxReq.onload = function () {
        var cities = JSON.parse(ajaxReq.responseText);
        cities.forEach(function(value){
            if(value.country_id == id){
            var op = document.createElement('option');
            op.innerText = value.name;
            op.setAttribute('value', value.id);
            document.getElementById('grad').appendChild(op);
            }
        });
    }
    ajaxReq.send();
}
}
dodaj.init();