<?php
include_once '../includes/header.inc.php';
?>

    <!-- Dodaj Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" id="modal" role="document">
            <div class="modal-content " style="
    width: 834px !important;
    margin-top: 65px;
">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Dodaj studenta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form method="post" action="../scripts/php/addStudent.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ime">Ime</label>
                                <input type="text" class="form-control" required name="ime" id="ime" placeholder="Alek">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="prezime">Prezime</label>
                                <input type="text" class="form-control" required name="prezime" id="prezime"
                                       placeholder="Niksic">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ime_roditelja">Ime roditelja</label>
                                <input type="text" class="form-control" required id="ime_roditelja" name="ime_roditelja"
                                       placeholder="Bakir">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telefon">Telefon</label>
                                <input type="number" class="form-control" required id="telefon" name="telefon"
                                       placeholder="38761695239">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jmbg">JMBG</label>
                            <input type="number" class="form-control" required id="jmbg" name="jmbg"
                                   placeholder="0101006500006">
                        </div>
                        <div class="form-group">
                            <label for="adresa">Adresa</label>
                            <input type="text" class="form-control" required minlength="7" name="adresa" id="adresa"
                                   placeholder="Konatur bb, Travnik, 72270">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" required name="email" id="email" name="email"
                                       placeholder="alek@live.com">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" required name="password" id="inputPassword"
                                       name="password"
                                       placeholder="******">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fakultet">Fakultet</label>
                            <input type="text" class="form-control" required id="fakultet" name="fakultet"
                                   placeholder="Fakultet informacionih tehnologija">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="odsjek">Odsjek</label>
                                <input type="text" class="form-control" required id="odsjek" name="odsjek"
                                       placeholder="Softversko programiranje">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="broj_indeksa">Broj indeksa</label>
                                <input type="text" class="form-control" required id="broj_indeksa" name="broj_indeksa"
                                       placeholder="FIT-10/19">
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
                            <button type="submit" class="btn btn-primary" name="submit">Dodaj studenta</button>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

    <!-- EDIT USER Modal -->
    <div class="modal fade" id="editUser" data-id="1" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" id="modal" role="document">
            <div class="modal-content " style="
    width: 834px !important;
    margin-top: 65px;
">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Uredi podatke</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form method="post" action="../scripts/php/ajaxStudent.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ime">Ime</label>
                                <input type="text" class="form-control" required name="ime" id="edit_ime"
                                       placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="prezime">Prezime</label>
                                <input type="text" class="form-control" required name="prezime" id="edit_prezime"
                                       placeholder="Niksic">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ime_roditelja">Ime roditelja</label>
                                <input type="text" class="form-control" required id="edit_ime_roditelja"
                                       name="ime_roditelja"
                                       placeholder="Bakir">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telefon">Telefon</label>
                                <input type="number" class="form-control" required id="edit_telefon" name="telefon"
                                       placeholder="38761695239">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jmbg">JMBG</label>
                            <input type="number" class="form-control" required id="edit_jmbg" name="jmbg"
                                   placeholder="0101006500006">
                        </div>
                        <div class="form-group">
                            <label for="adresa">Adresa</label>
                            <input type="text" class="form-control" required minlength="7" name="adresa" id="edit_adresa"
                                   placeholder="Konatur bb, Travnik, 72270">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" required name="email" id="edit_email" name="email"
                                       placeholder="alek@live.com">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" required name="password" id="edit_password"
                                       name="password"
                                       placeholder="******">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fakultet">Fakultet</label>
                            <input type="text" class="form-control" required id="edit_fakultet" name="fakultet"
                                   placeholder="Fakultet informacionih tehnologija">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="odsjek">Odsjek</label>
                                <input type="text" class="form-control" required id="edit_odsjek" name="odsjek"
                                       placeholder="Softversko programiranje">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="broj_indeksa">Broj indeksa</label>
                                <input type="text" class="form-control" required id="edit_broj_indeksa" name="broj_indeksa"
                                       placeholder="FIT-10/19">
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
                            <button type="submit" class="btn btn-primary" id="save_edit"
                            ">Sačuvaj</button>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>


    <div class="container-fluid" style="background-color: white;">
    <div class="row mt-0" style="height: 100vh;">
    <div class="table-responsive col-10 mx-auto" style="overflow-x:auto;margin-top: 70px;" id="tableT">

    <button type="button" id="modalButton" class="modalButton btn btn-light" data-toggle="modal"
            data-target="#exampleModalCenter" style="margin-bottom: 10px;">
        Dodaj studenta
    </button>

    <button type="button" id="printButton" class="modalButton btn btn-light" style="margin-bottom: 10px;">
        Print
    </button>

    <table class="table-striped" style="text-align: center" id="myTable">

    <thead class="thead-dark">
    <tr>
        <th>Radnja</th>
        <th>Userid</th>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Ime roditelja</th>
        <th>Adresa</th>
        <th>Telefon</th>
        <th>JMBG</th>
        <th>E-mail</th>
        <th>Broj indexa</th>
        <th>Fakultet</th>
        <th>Odsjek</th>
    </tr>
    </thead>
    <tbody>

<?php
include_once "../includes/dbh.inc.php";

$sql = $conn->query("SELECT * FROM studenti");

while ($data = $sql->fetch_array()) {
    echo '<tr><td>
<button class="editButton" data-id="' . $data['userid'] . '" onclick="edit(' . $data['userid'] . ')" data-toggle="modal" data-target="#editUser" style="outline: none; border: none;">
    <svg class="w-6 h-6"  viewBox="0 0 20 20" style="width: 25;height: 25;fill: #14274E;"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
 </button>
 
 <button data-id="' . $data['userid'] . '" onclick="deleteUser(' . $data['userid'] . ')" style="outline: none; border: none; background-color: none;">
<svg class="w-6 h-6" viewBox="0 0 20 20" style="width: 25;height: 25;fill: #14274E;"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
 </button>


</td>
                <td>' . $data['userid'] . '</td><td>' . $data['ime'] . '</td><td>' . $data['prezime'] . '</td><td>' . $data['ime_roditelja'] . '</td><td>' . $data['adresa'] . '</td>
                <td>' . $data['telefon'] . '</td><td>' . $data['jmbg'] . '</td><td>' . $data['email'] . '</td>
                <td>' . $data['broj_indeksa'] . '</td><td>' . $data['fakultet'] . '</td><td>' . $data['odsjek'] . '
        </td >
</tr > ';
}
?>




<?php
include_once '../includes/footer.inc.php';
include_once '../scripts/php/errorCheck.php';
?>

<script>



    if (window.location.href.indexOf('success=studentadded') > 0) {
        alert('Student je uspješno dodan u bazu');
    } else if (window.location.href.indexOf('success=professoradded') > 0) {
        alert('Profesor je uspješno dodan u bazu');
    } else if (window.location.href.indexOf('success=assistantadded') > 0) {
        alert('Asistent je uspješno dodan u bazu');
    } else if (window.location.href.indexOf('success=staffadded') > 0) {
        alert('Pomoćno osoblje je uspješno dodan u bazu');
    }

    $(document).ready(function () {

        $('#printButton').click(function () {
            window.print();
        });

        $('#myTable').DataTable(
            {
                language: {
                    searchPlaceholder: "Pretraži studente",
                    search: "",
                    "decimal": "",
                    "emptyTable": "Podaci nisu dostupni u tabeli",
                    "info": "Prikaz _START_ do _END_ od _TOTAL_ unosa",
                    "infoEmpty": "Prikazivanje 0 do 0 od 0 unosa",
                    "infoFiltered": "(filtrirano od ukupno _MAX_ unosa)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Prikaži _MENU_ unosa",
                    "loadingRecords": "Učitavanje ...",
                    "processing": "Obrada ...",
                    "zeroRecords": "Nisu pronađeni odgovarajući zapisi",
                    "paginate": {
                        "first": "Prvo",
                        "last": "Zadnje",
                        "next": "Sledeća",
                        "previous": "Prethodna"
                    },
                    "aria": {
                        "sortAscending": ": aktiviraj za sortiranje stupca uzlazno",
                        "sortDescending": ": aktiviraj za sortiranje silaznog stupca"
                    }
                }
            });
    });

    function edit(rowId) {
        $.ajax({
            url: '.././scripts/php/ajaxStudent.php',
            method: 'POST',
            dataType: 'JSON',
            data: {
                key: 'edit',
                rowId: rowId
            },
            success: function (r) {
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
            }
        });
    }

    function deleteUser(rowId) {
        let r = confirm("Ako želite izbrisati korisnika iz baze, kliknite na 'OK' ");
        if (r === true) {
            $.ajax({
                url: '.././scripts/php/ajaxStudent.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    key: 'delete',
                    role: 'student',
                    rowId: rowId
                },
                success: function (r) {
                    alert(r);
                    location.reload();
                }
            });
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

        $.ajax({
            url: '.././scripts/php/ajaxStudent.php',
            type: 'POST',
            dataType: 'text',
            data: {
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
            },
            success: function (r) {
                alert(r);
                location.reload();
            }
        });
    }
</script>
