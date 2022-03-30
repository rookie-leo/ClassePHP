<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      class exemplo {
        function exemplo_1($texto) {
          echo $texto;
        }

        function exibir() {
          echo "Exibir nota do aluno";
        }

        static function calc($a, $b) {
          echo $a + $b;
        }
      }

      $imprimir = new exemplo();
      $imprimir->exemplo_1("Impressão de uma função");
      echo "<br>";
      $imprimir->exibir();
echo"<br>";
      exemplo::calc(2, 2);
    ?> 
  </body>
</html>