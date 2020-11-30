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