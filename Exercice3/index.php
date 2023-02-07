<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // calcule de la différence entre deux date avec la fonction date_diff()
     class DifférenceDates
     {
       public $firstDate  = "1981-11-03";
       public $secondDate = "2013-09-04";
    

       function difference(){
            $this->firstDate = new DateTime($this->firstDate);
            $this->secondDate = new DateTime($this->secondDate);
            $intvl = $this->firstDate->diff($this->secondDate);
            echo "Difference : $intvl->y Années, $intvl->m Mois, $intvl->d Jours";
       }

     }
     $Différence_Dates = new DifférenceDates;
     $Différence_Dates->difference();
    ?>
</body>
</html>