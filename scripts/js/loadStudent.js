function makeRequest(url, method, dataType, data, success) {
    $.ajax({
        url: url,
        method: method,
        dataType: dataType,
        data: data,
        success: function (r) {
            success(r);
        }
    })
}

function edit(rowId) {
    data = {
        key: 'edit',
        rowId: rowId
    };
    makeRequest('.././scripts/php/ajaxStudent.php', 'POST', 'JSON', data, function (r) {
        $('#edit_ime').val(r.ime);
        $('#edit_prezime').val(r.prezime);
        $('#edit_ime_roditelja').val(r.ime_roditelja);
        $('#edit_telefon').val(r.telefon);
        $('#edit_jmbg').val(r.jmbg);
        $('#edit_adresa').val(r.adresa);
        $('#edit_email').val(r.email);
        $('#edit_password').val(r.password);
        $('#edit_fakultet').val(r.fakultet);
        $('#edit_odsjek').val(r.odsjek);
        $('#edit_broj_indexa').val(r.broj_indeksa);
        $("#save_edit").attr('onclick', "saveEdit(" + rowId + ")");
    })
}

function deleteUser(rowId) {
    let r = confirm("Ako želite izbrisati korisnika iz baze, kliknite na 'OK' ");
    data = {
        key: 'delete',
        rowId: rowId
    };

    if (r === true) {
        makeRequest('.././scripts/php/ajaxStudent.php', 'POST', 'text', data, function (r) {
            alert(r);
            location.reload();
        })
    }
}

function saveEdit(rowId) {
    var ime = $('#edit_ime').val();
    var prezime = $('#edit_prezime').val();
    var ime_roditelja = $('#edit_ime_roditelja').val();
    var telefon = $('#edit_telefon').val();
    var jmbg = $('#edit_jmbg').val();
    var adresa = $('#edit_adresa').val();
    var email = $('#edit_email').val();
    var password = $('#edit_password').val();
    var fakultet = $('#edit_fakultet').val();
    var odsjek = $('#edit_odsjek').val();
    var broj_indeksa = $('#edit_broj_indeksa').val();

    var data = {
        key: 'save_edit',
        rowId: rowId,
        ime: ime,
        prezime: prezime,
        ime_roditelja: ime_roditelja,
        telefon: telefon,
        jmbg: jmbg,
        adresa: adresa,
        email: email,
        password: password,
        fakultet: fakultet,
        odsjek: odsjek,
        broj_indeksa: broj_indeksa
    }

    makeRequest('.././scripts/php/ajaxStudent.php', 'POST', 'text', data, function (r) {
        alert(r);
        location.reload();
    })
}

$("#fakultetSelect").change(function () {
    $("#fakultetHold").remove();
    $("#godineSelect").empty();
    $("#godineSelect").append( "<option>3+2</option>" );
    $("#godineSelect").append( "<option>4+1</option>" );

    var selectedFax = $("#fakultetSelect option:selected").text();
    if (selectedFax === "Ekonomski fakultet") {
        getIndex("Ekonomski fakultet");
        $("#odsjekSelect").empty();
        $("#odsjekSelect").append( "<option value='Ekonomija'>Ekonomija</option>" );
        $("#odsjekSelect").append( "<option value='Računovodstvo,finansije i revizija'>Računovodstvo,finansije i revizija</option>" );
        $("#odsjekSelect").append( "<option value='Finansijska tržišta, instrumenti i institucij'>Finansijska tržišta, instrumenti i institucije</option>" );
        $("#odsjekSelect").append( "<option value='Preduzetništvo'>Preduzetništvo</option>" );
        $("#odsjekSelect").append( "<option value='Marketing i trgovina'>Marketing i trgovina</option>" );
        $("#odsjekSelect").append( "<option value='Bankarstvo i osiguranje'>Bankarstvo i osiguranje</option>" );
        $("#odsjekSelect").append( "<option value='Menadžment'>Menadžment</option>" );
        $("#odsjekSelect").append( "<option value='Menadžment u obrazovanju'>Menadžment u obrazovanju</option>" );
        $("#odsjekSelect").append( "<option value='Menadžment u zdravstvu'>Menadžment u zdravstvu</option>" );
        $("#odsjekSelect").append( "<option value='Turizam i hotelijerstvo'>Turizam i hotelijerstvo</option>" );
    } else if (selectedFax === "Ekološki fakultet") {
        getIndex("Ekološki fakultet");
        $("#odsjekSelect").append( "<option value='Ekologija i zaštita životne sredine'>Ekologija i zaštita životne sredine</option>" );
        $("#odsjekSelect").append( "<option value='Inžinjerstvo zaštite životne sredine'>Inžinjerstvo zaštite životne sredine</option>" );
        $("#odsjekSelect").append( "<option value='Biodiverzitet'>Biodiverzitet</option>" );
        $("#odsjekSelect").append( "<option value='Zaštita okoliša u gradovima'>Zaštita okoliša u gradovima</option>" );
        $("#odsjekSelect").append( "<option value='Održivi razvoj'>Održivi razvoj</option>" );
    } else if (selectedFax === "Saobraćajni fakultet") {
        getIndex("Saobraćajni fakultet");
        $("#odsjekSelect").append( "<option value='Drumski i gradski saobraćaj'>Drumski i gradski saobraćaj</option>" );
        $("#odsjekSelect").append( "<option value='Menadžment u saobraćaju'>Menadžment u saobraćaju</option>" );
        $("#odsjekSelect").append( "<option value='Vazdušni saobraćaj'>Vazdušni saobraćaj</option>" );
        $("#odsjekSelect").append( "<option value='Sigurnost u drumskom saobraćaju'>Sigurnost u drumskom saobraćaju</option>" );
        $("#odsjekSelect").append( "<option value='Saobraćaj'>Saobraćaj</option>" );
    } else if (selectedFax === "Pravni fakultet") {
        getIndex("Pravni fakultet");
        $("#odsjekSelect").append( "<option value='Građanskopravni'>Građanskopravni</option>" );
        $("#odsjekSelect").append( "<option value='Historija države i prava'>Historija države i prava</option>" );
        $("#odsjekSelect").append( "<option value='Krivičnopravni'>Krivičnopravni</option>" );
        $("#odsjekSelect").append( "<option value='Državno i međunarodno javno pravo'>Državno i međunarodno javno pravo</option>" );
        $("#odsjekSelect").append( "<option value='Privedno pravni'>Privedno pravni</option>" );
        $("#odsjekSelect").append( "<option value='Javna uprava'>Javna uprava</option>" );
    } else if (selectedFax === "Fakultet informacionih tehnologija") {
        getIndex("Fakultet informacionih tehnologija");
        $("#odsjekSelect").empty();
        $("#odsjekSelect").append( "<option value='Softversko programiranje'>Softversko programiranje</option>" );
        $("#odsjekSelect").append( "<option value='Informacione tehnologije'>Informacione tehnologije</option>"  );
        $("#odsjekSelect").append( "<option value='Računarski sistemi i mreže'>Računarski sistemi i mreže</option>" );
    } else if (selectedFax === "Fakultet za medije i komunikacije") {
        getIndex("Fakultet za medije i komunikacije");
        $("#odsjekSelect").append( "<option value='Odnosi s javnošću'>Odnosi s javnošću</option>" );
        $("#odsjekSelect").append( "<option value='Mediji'>Mediji</option>" );
        $("#odsjekSelect").append( "<option value='Komunikacije'>Komunikacije</option>" );
    } else if (selectedFax === "Fakultet politehničkih nauka") {
        getIndex("Fakultet politehničkih nauka");
        $("#odsjekSelect").append( "<option value='Mašinstvo'>Mašinstvo</option>" );
        $("#odsjekSelect").append( "<option value='Građevinarstvo'>Građevinarstvo</option>" );
        $("#odsjekSelect").append( "<option value='Elektrotehnika'>Elektrotehnika</option>" );
        $("#odsjekSelect").append( "<option value='Logistika'>Logistika</option>" );
        $("#odsjekSelect").append( "<option value='Sigurnost i zaštita na radu'>Sigurnost i zaštita na radu</option>" );
        $("#odsjekSelect").append( "<option value='Inžinjerski menađžment'>Inžinjerski menađžment</option>" );
        $("#odsjekSelect").append( "<option value='Arhitektura i urbanizam'>Arhitektura i urbanizam</option>" );
    }

});

function getIndex(fax) {
    var data = {
        getIndex: 1
    }

    makeRequest("../scripts/php/getIndex.php","POST","text",data,function (r) {
        var d = new Date();
        var year = d.getFullYear().toString().substr(2,2);
        switch (fax) {
            case "Ekonomski fakultet":
                $("#broj_indeksa").val("E-"+r+"/"+year);
                break;
            case "Ekološki fakultet":
                $("#broj_indeksa").val("EK-"+r+"/"+year);
                break;
            case "Saobraćajni fakultet":
                $("#broj_indeksa").val("S-"+r+"/"+year);
                break;
            case "Pravni fakultet":
                $("#broj_indeksa").val("P-"+r+"/"+year);
                break;
            case "Fakultet informacionih tehnologija":
                $("#broj_indeksa").val("FIT-"+r+"/"+year);
                break;
            case "Fakultet za medije i komunikacije":
                $("#broj_indeksa").val("FMIK-"+r+"/"+year);
                break;
            case "Fakultet politehničkih nauka":
                $("#broj_indeksa").val("FPN-"+r+"/"+year);
                break;
        }
    })
}