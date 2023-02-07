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
      class tableau 
      {
         public $list  = array(11, -2, 4, 35, 0, 8, -9);

         function trie()
         {
             sort ($this->list);
         }
      }

      $mon_tableau = new tableau();

      $mon_tableau->trie();

      var_dump ($mon_tableau->list);
    ?>
</body>
</html>