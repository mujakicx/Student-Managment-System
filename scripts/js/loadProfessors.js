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
    makeRequest('.././scripts/php/ajaxProfesor.php', 'POST', 'JSON', data, function (r) {
        $('#edit_ime').val(r.ime);
        $('#edit_prezime').val(r.prezime);
        $('#edit_telefon').val(r.telefon);
        $('#edit_titula').val(r.titula);
        $('#edit_adresa').val(r.adresa);
        $('#edit_email').val(r.email);
        $('#edit_password').val(r.password);
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
        makeRequest('.././scripts/php/ajaxProfesor.php', 'POST', 'text', data, function (r) {
            alert(r);
            location.reload();
        })
    }
}

function saveEdit(rowId) {
    var ime = $('#edit_ime').val();
    var prezime = $('#edit_prezime').val();
    var telefon = $('#edit_telefon').val();
    var adresa = $('#edit_adresa').val();
    var email = $('#edit_email').val();
    var password = $('#edit_password').val();
    var titula = $('#edit_titula').val();

    var data = {
        key: 'save_edit',
        rowId: rowId,
        ime: ime,
        prezime: prezime,
        titula: titula,
        telefon: telefon,
        adresa: adresa,
        email: email,
        password: password
    }

    makeRequest('.././scripts/php/ajaxProfesor.php', 'POST', 'text', data, function (r) {
        alert(r);
        location.reload();
    })
}