<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>primeiro exemplo</title>
        
    <h1>teste</h1>
   
    </head>
    <body>
        <form>
        <table border=1>
            <tr>
               <td>Nome</td>
               <td>Preço</td>
               <td>Quantidade</td>
            </tr>
            <?php
            
               define('DB_HOST'        , "192.168.100.21,9024");
                define('DB_USER'        , "sa");
                define('DB_PASSWORD'    , "AgoRa@2016");
                define('DB_NAME'        , "ClinicaFamilia");
                define('DB_DRIVER'      , "sqlsrv");

                require_once "conexaoBD.php";

                try{

                    $Conexao    = conexaoBD::getConnection();
                    $query      = $Conexao->query("SELECT NomePaciente FROM Paciente");
                    $produtos   = $query->fetchAll();

                 }catch(Exception $e){

                    echo $e->getMessage();
                    exit;

                 }          
                     foreach($produtos as $produto) {
            ?>
            <tr>
                <td><?php echo $produto['NomePaciente']; ?></td>
                
            </tr>
            <?php
               }
            ?>
        </table>
    </form>
       
    </body>
</html>
