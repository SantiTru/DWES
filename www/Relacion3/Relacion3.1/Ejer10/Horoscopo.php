<?
        $dia = $_POST["dia"];
        $mes = $_POST["mes"];

        $mesMinusculas = strtolower($mes);

        $existe = true;

        if (($mesMinusculas == "enero" && $dia >= 20 && $dia <= 31) || ($mesMinusculas == "febrero" && $dia >= 1 && $dia <= 18)) {
          $horoscopo = "Acuario";
        } elseif (($mesMinusculas == "febrero" && $dia >= 19 && $dia <= 29) || ($mesMinusculas == "marzo" && $dia >= 1 && $dia <= 20)) {
          $horoscopo = "Piscis";
        } elseif (($mesMinusculas == "marzo" && $dia >= 21 && $dia <= 31) || ($mesMinusculas == "abril" && $dia >= 1 && $dia <= 19)) {
          $horoscopo = "Aries";
        } elseif (($mesMinusculas == "abril" && $dia >= 20 && $dia <= 30) || ($mesMinusculas == "mayo" && $dia >= 1 && $dia <= 20)) {
          $horoscopo = "Tauro";
        } elseif (($mesMinusculas == "mayo" && $dia >= 21 && $dia <= 31) || ($mesMinusculas == "junio" && $dia >= 1 && $dia <= 20)) {
          $horoscopo = "Géminis";
        } elseif (($mesMinusculas == "junio" && $dia >= 21 && $dia <= 30) || ($mesMinusculas == "julio" && $dia >= 1 && $dia <= 22)) {
          $horoscopo = "Cáncer";
        } elseif (($mesMinusculas == "julio" && $dia >= 23 && $dia <= 31) || ($mesMinusculas == "agosto" && $dia >= 1 && $dia <= 22)) {
          $horoscopo = "Leo";
        } elseif (($mesMinusculas == "agosto" && $dia >= 23 && $dia <= 31) || ($mesMinusculas == "septiembre" && $dia >= 1 && $dia <= 22)) {
          $horoscopo = "Virgo";
        } elseif (($mesMinusculas == "septiembre" && $dia >= 23 && $dia <= 30) || ($mesMinusculas == "octubre" && $dia >= 1 && $dia <= 22)) {
          $horoscopo = "Libra";
        } elseif (($mesMinusculas == "octubre" && $dia >= 23 && $dia <= 31) || ($mesMinusculas == "noviembre" && $dia >= 1 && $dia <= 21)) {
          $horoscopo = "Escorpio";
        } elseif (($mesMinusculas == "noviembre" && $dia >= 22 && $dia <= 30) || ($mesMinusculas == "diciembre" && $dia >= 1 && $dia <= 21)) {
          $horoscopo = "Sagitario";
        } elseif (($mesMinusculas == "diciembre" && $dia >= 22 && $dia <= 31) || ($mesMinusculas == "enero" && $dia >= 1 && $dia <= 19)) {
          $horoscopo = "Capricornio";
        } else {
          $horoscopo = "No se ha encontrado un horóscopo correspondiente para el día " . $dia . " de " . ucfirst(strtolower($mes)); 
          $existe = false;
        };

        if ($existe) {
          echo "El horóscopo para el día " . $dia . " de " . ucfirst(strtolower($mes)) . " es: " . $horoscopo;
        } else {
          echo $horoscopo;
        }
      ?>