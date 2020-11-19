<?php
if(isset($_GET['error'])) {

    if($_GET['error'] == "duplicateemail") {
        echo '<script>
        alert("E-mail je u upotrebi, pokušajte ponovo !");
        </script>
        ';
    } elseif ($_GET['error'] == "invalidemail") {
        echo '<script>
        alert("E-mail nije validan, pokušajte ponovo !");
        </script>
        ';
    } elseif ($_GET['error'] == "emptyinput") {
        echo '<script>
        alert("Polja ne smiju biti prazna, pokušajte ponovo !");
        </script> 
        ';
    } elseif ($_GET['error'] == "nosubmit") {
        echo '<script>
        alert("Niste kliknuli dugme, pokušajte ponovo !");
        </script> 
        ';
    } elseif ($_GET['error'] == "connectionfailed") {
        echo '<script>
        alert("Konekcija nije uspjela, pokušajte ponovo !");
        </script> 
        ';
    } elseif ($_GET['error'] == "queryfailed") {
        echo '<script>
        alert("Upit nije uspio, pokušajte ponovo !");
        </script> 
        ';
    }}