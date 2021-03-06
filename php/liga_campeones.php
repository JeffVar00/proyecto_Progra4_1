<!DOCTYPE html>
<html lang="es">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Champions League - Home</title>
<link rel="icon" type="image/x-icon" href="../img/champ.png">
<meta charset="utf-8">
<link href="../css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="../js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/foot_champions.css">
<link href="../css/links.css" type="text/css" rel="stylesheet">
</head>
<body>	
<nav class="navbar navbar-expand-sm" style= "background-color: #FFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.html" target=_self><img src="../img/UEFA_logo.png" alt="UEFA Home" widht="50" height ="50"></a>
    <button class="navbar-toggler bg-secundary navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      </ul>
      <a class="nav-link" href="../php/login.php">Inicia Sesión</a>
    </div>
  </div>
</nav>

<div class="container-fluid back">
  <br><br>
  <img src="../img/champions.png" widht="350" height ="350"></img>
  <br><br><br>
</div>

<div class="container-fluid" style = "background-color: #000645; text-align: center;">
  <br><br><br>
  <div class="container">
    
    <div class="row">
      <div class="col-sm-5">
          <div class="card" style="width: 100%; ">
            <div class="card-body">
            <h5 class="card-text"><font color="#000644">La Champions League inicia!</font></h5>
            </div>
            <img class="card-img-bottom img-fluid" src="../img/champions_cup.jpg" alt="Card image" style="width:100%">
          </div>
        <br>
      </div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-3">
          <div class="card" style="width:100%; top: 10%;">
            <a href="#info" ><img class="img-fluid" src="../img/grupos.jpg" alt="Card image" style="width:100%"></img></a>
            <div class="card-body">
              <h5 class="card-title"><font color="#000644">Ultimas competiciones</font></h5>
            </div>
          </div>
        <br>
      </div>
      <div class="col-sm-3">
          <div class="card" style="width:100%; top: 10%;">
            <a href="#tablas" ><img class="img-fluid" src="../img/tabla.jpg" alt="Card image" style="width:100%"></img></a>
            <div class="card-body">
              <h5 class="card-title"><font color="#000644">Tablas de Puntuación</font></h5>
            </div>
          </div>
        <br>      
      </div>
    </div>
    <br><br>
  </div>
</div>

<div class="container-fluid">

    <br><br>
    <h3 id="tablas" class="title"><font color="#000644">Grupos Temporada 2022/23</font> </h3>

    <div class="container">

    <div class="container-fluid">
  
    <div class="container mt-5">

    <h5><font color="#000644">GRUPO A
    <div id="adicionados"></div>
    </font></h5>
    <table id="Grupo A" class="table table-hover" >
        <thead>
            <th name = "club" scope="col" width="80%"><font color="#929292">Club</font></th>
            <th name = "PJ" scope="col">PJ</th>
            <th name = "PG" scope="col">G</th>
            <th name = "PP" scope="col">E</th>
            <th name = "PE" scope="col">P</th>
            <th name = "GF" scope="col">GF</th>
            <th name = "GC" scope="col">GC</th>
            <th name = "DG" scope="col">DG</th>
            <th name = "Pts" scope="col">Pts</th>
        </thead>
        <tbody>
          <?php
          require_once "conexiones/conexion.php";
          $query1="SELECT * FROM CLUBES WHERE ID_GRUPO = 'A' ORDER BY Pts DESC";
          $consulta1=$mysqli->query($query1);
          while($fila1=$consulta1->fetch_array(MYSQLI_ASSOC)){
            echo "
              <tr>
              <td>".$fila1['NOMBRE']."</td>
              <td>".$fila1['PJ']."</td>
              <td>".$fila1['PG']."</td>
              <td>".$fila1['PP']."</td>
              <td>".$fila1['PE']."</td>
              <td>".$fila1['GF']."</td>
              <td>".$fila1['GC']."</td>
              <td>".$fila1['DG']."</td>
              <td>".$fila1['Pts']."</td>
            </tr>"; 
          }
        ?>
        </tbody>
    </table>

    <br>

    <h5><font color="#000644">GRUPO B
    <div id="adicionados"></div>
    </font></h5>
    <table id="Grupo B" class="table table-hover" >
        <thead>
            <th name = "club" scope="col" width="80%"><font color="#929292">Club</font></th>
            <th name = "PJ" scope="col">PJ</th>
            <th name = "PG" scope="col">G</th>
            <th name = "PP" scope="col">E</th>
            <th name = "PE" scope="col">P</th>
            <th name = "GF" scope="col">GF</th>
            <th name = "GC" scope="col">GC</th>
            <th name = "DG" scope="col">DG</th>
            <th name = "Pts" scope="col">Pts</th>
        </thead>
        <tbody>
        <?php
          require_once "conexiones/conexion.php";
          $query1="SELECT * FROM CLUBES WHERE ID_GRUPO = 'B' ORDER BY Pts DESC";
          $consulta1=$mysqli->query($query1);
          while($fila1=$consulta1->fetch_array(MYSQLI_ASSOC)){
            echo "
              <tr>
              <td>".$fila1['NOMBRE']."</td>
              <td>".$fila1['PJ']."</td>
              <td>".$fila1['PG']."</td>
              <td>".$fila1['PP']."</td>
              <td>".$fila1['PE']."</td>
              <td>".$fila1['GF']."</td>
              <td>".$fila1['GC']."</td>
              <td>".$fila1['DG']."</td>
              <td>".$fila1['Pts']."</td>
            </tr>"; 
          }
        ?>
        </tbody>
    </table>

    <br>

    <h5><font color="#000644">GRUPO C
    <div id="adicionados"></div>
    </font></h5>
    <table id="Grupo C" class="table table-hover" >
        <thead>
            <th name = "club" scope="col" width="80%"><font color="#929292">Club</font></th>
            <th name = "PJ" scope="col">PJ</th>
            <th name = "PG" scope="col">G</th>
            <th name = "PP" scope="col">E</th>
            <th name = "PE" scope="col">P</th>
            <th name = "GF" scope="col">GF</th>
            <th name = "GC" scope="col">GC</th>
            <th name = "DG" scope="col">DG</th>
            <th name = "Pts" scope="col">Pts</th>
        </thead>
        <tbody>
        <?php
          require_once "conexiones/conexion.php";
          $query1="SELECT * FROM CLUBES WHERE ID_GRUPO = 'C' ORDER BY Pts DESC";
          $consulta1=$mysqli->query($query1);
          while($fila1=$consulta1->fetch_array(MYSQLI_ASSOC)){
            echo "
              <tr>
              <td>".$fila1['NOMBRE']."</td>
              <td>".$fila1['PJ']."</td>
              <td>".$fila1['PG']."</td>
              <td>".$fila1['PP']."</td>
              <td>".$fila1['PE']."</td>
              <td>".$fila1['GF']."</td>
              <td>".$fila1['GC']."</td>
              <td>".$fila1['DG']."</td>
              <td>".$fila1['Pts']."</td>
            </tr>"; 
          }
        ?>
        </tbody>
    </table>

    <br>

    <h5><font color="#000644">GRUPO D
    <div id="adicionados"></div>
    </font></h5>
    <table id="Grupo D" class="table table-hover" >
        <thead>
            <th name = "club" scope="col" width="80%"><font color="#929292">Club</font></th>
            <th name = "PJ" scope="col">PJ</th>
            <th name = "PG" scope="col">G</th>
            <th name = "PP" scope="col">E</th>
            <th name = "PE" scope="col">P</th>
            <th name = "GF" scope="col">GF</th>
            <th name = "GC" scope="col">GC</th>
            <th name = "DG" scope="col">DG</th>
            <th name = "Pts" scope="col">Pts</th>
        </thead>
        <tbody>
          <?php
          require_once "conexiones/conexion.php";
          $query1="SELECT * FROM CLUBES WHERE ID_GRUPO = 'D' ORDER BY Pts DESC";
          $consulta1=$mysqli->query($query1);
          while($fila1=$consulta1->fetch_array(MYSQLI_ASSOC)){
            echo "
              <tr>
              <td>".$fila1['NOMBRE']."</td>
              <td>".$fila1['PJ']."</td>
              <td>".$fila1['PG']."</td>
              <td>".$fila1['PP']."</td>
              <td>".$fila1['PE']."</td>
              <td>".$fila1['GF']."</td>
              <td>".$fila1['GC']."</td>
              <td>".$fila1['DG']."</td>
              <td>".$fila1['Pts']."</td>
            </tr>"; 
          }
        ?>
        </tbody>
    </table>

    <br>

    <h5><font color="#000644">GRUPO E
    <div id="adicionados"></div>
    </font></h5>
    <table id="Grupo E" class="table table-hover" >
        <thead>
            <th name = "club" scope="col" width="80%"><font color="#929292">Club</font></th>
            <th name = "PJ" scope="col">PJ</th>
            <th name = "PG" scope="col">G</th>
            <th name = "PP" scope="col">E</th>
            <th name = "PE" scope="col">P</th>
            <th name = "GF" scope="col">GF</th>
            <th name = "GC" scope="col">GC</th>
            <th name = "DG" scope="col">DG</th>
            <th name = "Pts" scope="col">Pts</th>
        </thead>
        <tbody>
          <?php
          require_once "conexiones/conexion.php";
          $query1="SELECT * FROM CLUBES WHERE ID_GRUPO = 'E' ORDER BY Pts DESC";
          $consulta1=$mysqli->query($query1);
          while($fila1=$consulta1->fetch_array(MYSQLI_ASSOC)){
            echo "
              <tr>
              <td>".$fila1['NOMBRE']."</td>
              <td>".$fila1['PJ']."</td>
              <td>".$fila1['PG']."</td>
              <td>".$fila1['PP']."</td>
              <td>".$fila1['PE']."</td>
              <td>".$fila1['GF']."</td>
              <td>".$fila1['GC']."</td>
              <td>".$fila1['DG']."</td>
              <td>".$fila1['Pts']."</td>
            </tr>"; 
          }
        ?>
        </tbody>
    </table>

    <br>

    <h5><font color="#000644">GRUPO F
    <div id="adicionados"></div>
    </font></h5>
    <table id="Grupo F" class="table table-hover" >
        <thead>
            <th name = "club" scope="col" width="80%"><font color="#929292">Club</font></th>
            <th name = "PJ" scope="col">PJ</th>
            <th name = "PG" scope="col">G</th>
            <th name = "PP" scope="col">E</th>
            <th name = "PE" scope="col">P</th>
            <th name = "GF" scope="col">GF</th>
            <th name = "GC" scope="col">GC</th>
            <th name = "DG" scope="col">DG</th>
            <th name = "Pts" scope="col">Pts</th>
        </thead>
        <tbody>
          <?php
          require_once "conexiones/conexion.php";
          $query1="SELECT * FROM CLUBES WHERE ID_GRUPO = 'F' ORDER BY Pts DESC";
          $consulta1=$mysqli->query($query1);
          while($fila1=$consulta1->fetch_array(MYSQLI_ASSOC)){
            echo "
              <tr>
              <td>".$fila1['NOMBRE']."</td>
              <td>".$fila1['PJ']."</td>
              <td>".$fila1['PG']."</td>
              <td>".$fila1['PP']."</td>
              <td>".$fila1['PE']."</td>
              <td>".$fila1['GF']."</td>
              <td>".$fila1['GC']."</td>
              <td>".$fila1['DG']."</td>
              <td>".$fila1['Pts']."</td>
            </tr>"; 
          }
        ?>
        </tbody>
    </table>

    <br>

    <h5><font color="#000644">GRUPO G
    <div id="adicionados"></div>
    </font></h5>
    <table id="Grupo G" class="table table-hover" >
        <thead>
            <th name = "club" scope="col" width="80%"><font color="#929292">Club</font></th>
            <th name = "PJ" scope="col">PJ</th>
            <th name = "PG" scope="col">G</th>
            <th name = "PP" scope="col">E</th>
            <th name = "PE" scope="col">P</th>
            <th name = "GF" scope="col">GF</th>
            <th name = "GC" scope="col">GC</th>
            <th name = "DG" scope="col">DG</th>
            <th name = "Pts" scope="col">Pts</th>
        </thead>
        <tbody>
          <?php
          require_once "conexiones/conexion.php";
          $query1="SELECT * FROM CLUBES WHERE ID_GRUPO = 'G' ORDER BY Pts DESC";
          $consulta1=$mysqli->query($query1);
          while($fila1=$consulta1->fetch_array(MYSQLI_ASSOC)){
            echo "
              <tr>
              <td>".$fila1['NOMBRE']."</td>
              <td>".$fila1['PJ']."</td>
              <td>".$fila1['PG']."</td>
              <td>".$fila1['PP']."</td>
              <td>".$fila1['PE']."</td>
              <td>".$fila1['GF']."</td>
              <td>".$fila1['GC']."</td>
              <td>".$fila1['DG']."</td>
              <td>".$fila1['Pts']."</td>
            </tr>"; 
          }
        ?>
        </tbody>
    </table>

    <br>

    <h5><font color="#000644">GRUPO H
    <div id="adicionados"></div>
    </font></h5>
    <table id="Grupo H" class="table table-hover" >
        <thead>
            <th name = "club" scope="col" width="80%"><font color="#929292">Club</font></th>
            <th name = "PJ" scope="col">PJ</th>
            <th name = "PG" scope="col">G</th>
            <th name = "PP" scope="col">E</th>
            <th name = "PE" scope="col">P</th>
            <th name = "GF" scope="col">GF</th>
            <th name = "GC" scope="col">GC</th>
            <th name = "DG" scope="col">DG</th>
            <th name = "Pts" scope="col">Pts</th>
        </thead>
        <tbody>
          <?php
          require_once "conexiones/conexion.php";
          $query1="SELECT * FROM CLUBES WHERE ID_GRUPO = 'H' ORDER BY Pts DESC";
          $consulta1=$mysqli->query($query1);
          while($fila1=$consulta1->fetch_array(MYSQLI_ASSOC)){
            echo "
              <tr>
              <td>".$fila1['NOMBRE']."</td>
              <td>".$fila1['PJ']."</td>
              <td>".$fila1['PG']."</td>
              <td>".$fila1['PP']."</td>
              <td>".$fila1['PE']."</td>
              <td>".$fila1['GF']."</td>
              <td>".$fila1['GC']."</td>
              <td>".$fila1['DG']."</td>
              <td>".$fila1['Pts']."</td>
            </tr>"; 
          }
        ?>
        </tbody>
    </table>

    
    </div>       

    <br><br>

    </div>
    
    </div>
            

  <br><br>

</div>

<div class="col-autobg-danger p-5 text-center" style = "background-color: #FFFFFF;">
        <h4 class="title"><font color="#000644">Partidos</font></h4>
        <br>
        <h5 class="title"><font color="#000644">Grupo A</font></h5>
            <table id="myTable" class="table table-bordered " border="1">
                <thead>
                   
                    <th width="35%">Casa</th>
                    <th>Goles</th>
                    <th> vs </th>
                    <th>Goles</th>
                    <th width="35%">Visitante</th>
                </thead>
            <thbody>
              <?php
        require_once "conexiones/conexion.php";
        $query="SELECT * FROM PARTIDOS WHERE ID_GRUPO = 'A'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            
            <td>".$fila['CASA']."</td>
            <td>".$fila['G_CASA']."</td>
            <td> vs </td>
            <td>".$fila['G_VISITANTE']."</td>
            <td>".$fila['VISITANTE']."</td>
          </tr>";
        }
      ?>  
            </thbody>
          </table>

          <br>
        <h5 class="title"><font color="#000644">Grupo B</font></h5>
            <table id="myTable" class="table table-bordered " border="1">
                <thead>
                   
                    <th width="35%">Casa</th>
                    <th>Goles</th>
                    <th> vs </th>
                    <th>Goles</th>
                    <th width="35%">Visitante</th>
                </thead>
            <thbody>
              <?php
        require_once "conexiones/conexion.php";
        $query="SELECT * FROM PARTIDOS WHERE ID_GRUPO= 'B'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            
            <td>".$fila['CASA']."</td>
            <td>".$fila['G_CASA']."</td>
            <td> vs </td>
            <td>".$fila['G_VISITANTE']."</td>
            <td>".$fila['VISITANTE']."</td>
          </tr>";
        }
      ?>  
            </thbody>
          </table>
        <br>
        <h5 class="title"><font color="#000644">Grupo C</font></h5>
            <table id="myTable" class="table table-bordered " border="1">
                <thead>
                   
                    <th width="35%">Casa</th>
                    <th>Goles</th>
                    <th> vs </th>
                    <th>Goles</th>
                    <th width="35%">Visitante</th>
                </thead>
            <thbody>
              <?php
        require_once "conexiones/conexion.php";
        $query="SELECT * FROM PARTIDOS WHERE ID_GRUPO= 'C'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            
            <td>".$fila['CASA']."</td>
            <td>".$fila['G_CASA']."</td>
            <td> vs </td>
            <td>".$fila['G_VISITANTE']."</td>
            <td>".$fila['VISITANTE']."</td>
          </tr>";
        }
      ?>  
            </thbody>
          </table>
        <br>
                <h5 class="title"><font color="#000644">Grupo D</font></h5>
            <table id="myTable" class="table table-bordered " border="1">
                <thead>
                   
                    <th width="35%">Casa</th>
                    <th>Goles</th>
                    <th> vs </th>
                    <th>Goles</th>
                    <th width="35%">Visitante</th>
                </thead>
            <thbody>
              <?php
        require_once "conexiones/conexion.php";
        $query="SELECT * FROM PARTIDOS WHERE ID_GRUPO= 'D'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            
            <td>".$fila['CASA']."</td>
            <td>".$fila['G_CASA']."</td>
            <td> vs </td>
            <td>".$fila['G_VISITANTE']."</td>
            <td>".$fila['VISITANTE']."</td>
          </tr>";
        }
      ?>  
            </thbody>
          </table>
        <br>
                <h5 class="title"><font color="#000644">Grupo E</font></h5>
            <table id="myTable" class="table table-bordered " border="1">
                <thead>
                   
                    <th width="35%">Casa</th>
                    <th>Goles</th>
                    <th> vs </th>
                    <th>Goles</th>
                    <th width="35%">Visitante</th>
                </thead>
            <thbody>
              <?php
        require_once "conexiones/conexion.php";
        $query="SELECT * FROM PARTIDOS WHERE ID_GRUPO= 'E'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            
            <td>".$fila['CASA']."</td>
            <td>".$fila['G_CASA']."</td>
            <td> vs </td>
            <td>".$fila['G_VISITANTE']."</td>
            <td>".$fila['VISITANTE']."</td>
          </tr>";
        }
      ?>  
            </thbody>
          </table>
        <br>
                <h5 class="title"><font color="#000644">Grupo F</font></h5>
            <table id="myTable" class="table table-bordered " border="1">
                <thead>
                   
                    <th width="35%">Casa</th>
                    <th>Goles</th>
                    <th> vs </th>
                    <th>Goles</th>
                    <th width="35%">Visitante</th>
                </thead>
            <thbody>
              <?php
        require_once "conexiones/conexion.php";
        $query="SELECT * FROM PARTIDOS WHERE ID_GRUPO= 'F'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            
            <td>".$fila['CASA']."</td>
            <td>".$fila['G_CASA']."</td>
            <td> vs </td>
            <td>".$fila['G_VISITANTE']."</td>
            <td>".$fila['VISITANTE']."</td>
          </tr>";
        }
      ?>  
            </thbody>
          </table>
        <br>
                <h5 class="title"><font color="#000644">Grupo G</font></h5>
            <table id="myTable" class="table table-bordered " border="1">
                <thead>
                   
                    <th width="35%">Casa</th>
                    <th>Goles</th>
                    <th> vs </th>
                    <th>Goles</th>
                    <th width="35%">Visitante</th>
                </thead>
            <thbody>
              <?php
        require_once "conexiones/conexion.php";
        $query="SELECT * FROM PARTIDOS WHERE ID_GRUPO= 'G'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            
            <td>".$fila['CASA']."</td>
            <td>".$fila['G_CASA']."</td>
            <td> vs </td>
            <td>".$fila['G_VISITANTE']."</td>
            <td>".$fila['VISITANTE']."</td>
          </tr>";
        }
      ?>  
            </thbody>
          </table>
        <br>
                <h5 class="title"><font color="#000644">Grupo H</font></h5>
            <table id="myTable" class="table table-bordered " border="1">
                <thead>
                   
                    <th width="35%">Casa</th>
                    <th>Goles</th>
                    <th> vs </th>
                    <th>Goles</th>
                    <th width="35%">Visitante</th>

                </thead>
            <thbody>
              <?php
        require_once "conexiones/conexion.php";
        $query="SELECT * FROM PARTIDOS WHERE ID_GRUPO= 'H'";
        $consulta1=$mysqli->query($query);
        while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
          echo "<tr>
            
            <td>".$fila['CASA']."</td>
            <td>".$fila['G_CASA']."</td>
            <td> vs </td>
            <td>".$fila['G_VISITANTE']."</td>
            <td>".$fila['VISITANTE']."</td>
          </tr>";
        }
      ?>  
            </thbody>
          </table>
        <br>

    </div>

<article style = "background-color: #000645; text-align: center;">
        <br>
          <div class="container mt-3" style="text-align:center;" >
            <h4 id="info">Campeones de los últimos 10 torneos.</h4>
            <table class="table table-bordered" bgcolor='#FFF' style="width:100%; height: 50%; ;">
              <thead>
                <tr>
                  <th>Equipo Ganador</th>
                  <th>Temporada</th>
                </tr>
              </thead>
              <thbody>
                <tr>
                  <td><img src="../img/chelsea-fc-logo.png" alt="Chelsea FC Logo" width="50px" height="50px"> Chelsea FC</td>
                  <td align="center">2020/21</td>
                </tr>
                <tr>
                  <td><img src="../img/fc-bayern-munchen-logo.png" alt="FC Bayern Munchen Logo" width="50px" height="50px">FC Bayern Munchen</td>
                  <td align="center">2019/20</td>
                </tr>
                <tr>
                  <td><img src="../img/Liverpool_FC_logo.webp" alt="Liverpool Futball Club Logo" width="50px" height="50px">Liverpool FC</td>
                  <td align="center">2018/19</td>
                </tr>
                <tr>
                  <td><img src="../img/realmadrid.png" alt="Real Madrid Logo">Real Madrid</td>
                  <td align="center">2017/18</td>
                </tr>
                <tr>
                  <td><img src="../img/realmadrid.png" alt="Real Madrid Logo">Real Madrid</td>
                  <td align="center">2016/17</td>
                </tr>
                <tr>
                  <td><img src="../img/realmadrid.png" alt="Real Madrid Logo">Real Madrid</td>
                  <td align="center">2015/16</td>
                </tr>
                <tr>
                  <td><img src="../img/1278105613.png" alt="FC Barcelona Logo" width="50px" height="50px">Fútbol Club Barcelona</td>
                  <td align="center">2014/15</td>
                </tr>                
                <tr>
                  <td><img src="../img/realmadrid.png" alt="Real Madrid Logo">Real Madrid</td>
                  <td align="center">2013/14</td>
                </tr> 
                <tr>
                  <td><img src="../img/fc-bayern-munchen-logo.png" alt="FC Bayern Munchen Logo" width="50px" height="50px">FC Bayern Munchen</td>
                  <td align="center">2012/13</td>
                </tr>
                <tr>
                  <td><img src="../img/chelsea-fc-logo.png" alt="Chelsea FC Logo" width="50px" height="50px"> Chelsea FC</td>
                  <td align="center">2011/12</td>
                </tr>                
              </thbody>
            </table>
            <br>
            <h4>Estadisticas historicas</h4>
            <h5>Más Títulos</h5>
            <table class="table table-bordered" bgcolor='#FFF'>
              <thead>
                <tr>
                  <th>Equipo</th>
                  <th>Torneos Ganados</th>
                </tr>
              </thead>
              <thbody>
                <tr>
                  <td><img src="../img/realmadrid.png" alt="Real Madrid Logo">Real Madrid</td>
                  <td align="center">13</td>
                </tr>
                <tr>
                  <td><img src="../img/Milan_logo.png" alt="AC Milan Logo" width="50px" height="80px" style="padding: 5px;">AC Milan</td>
                  <td align="center">7</td>
                </tr>
                <tr>
                  <td><img src="../img/Liverpool_FC_logo.webp" alt="Liverpool Futball Club Logo" width="50px" height="50px">Liverpool</td>
                  <td align="center">6</td>
                </tr>
                <tr>
                  <td><img src="../img/fc-bayern-munchen-logo.png" alt="FC Bayern Munchen Logo" width="50px" height="50px">FC Bayern Munchen</td>
                  <td align="center">6</td>
                </tr>
                <tr>
                  <td><img src="../img/1278105613.png" alt="FC Barcelona Logo" width="50px" height="50px">Fútbol Club Barcelona</td>
                  <td align="center">5</td>
                </tr>
              </thbody>
            </table>
            <br>
            <br>
            <h5>Más Temporadas Disputadas</h5>
            <table class="table table-bordered" bgcolor='#FFF'>
              <thead>
                <tr>
                  <th>Equipo</th>
                  <th>Temporadas Disputadas</th>
                </tr>
              </thead>
              <thbody>
                <tr>
                  <td><img src="../img/realmadrid.png" alt="Real Madrid Logo">Real Madrid</td>
                  <td align="center">47</td>
                </tr>
                <tr>
                  <td><img src="../img/SLB.png" alt="Sport Lisboa e Benfica Logo" width="60px" height="65px" style="padding: 5px;">Sport Lisboa e Benfica</td>
                  <td align="center">41</td>
                </tr>
                <tr>
                  <td><img src="../img/FC_Dynamo_Kyiv_logo.png" alt="FC Dynamo Kyiv Logo" width="50px" height="70px">  FC Dynamo Kyiv</td>
                  <td align="center">39</td>
                </tr>
                <tr>
                  <td><img src="../img/AFC-Ajax.png" alt="AFC Ajax Logo" width="50px" height="50px">AFC Ajax</td>
                  <td align="center">38</td>
                </tr>
                <tr>
                  <td><img src="../img/Juventus-logo.png" alt="Juventus Logo" width="55px" height="50px" style="padding: 5px;">Juventus</td>
                  <td align="center">35</td>
                </tr>
              </thbody>
            </table>
            <br>
            <br>  
            <h5>Más Partidos Disputados</h5>
            <table class="table table-bordered" bgcolor='#FFF'>
              <thead>
                <tr>
                  <th>Equipo</th>
                  <th>Partidos Disputados</th>
                </tr>
              </thead>
              <thbody>
                <tr>
                  <td><img src="../img/realmadrid.png" alt="Real Madrid Logo">Real Madrid</td>
                  <td align="center">462</td>
                </tr>
                <tr>
                  <td><img src="../img/fc-bayern-munchen-logo.png" alt="FC Bayern Munchen Logo" width="50px" height="50px">FC Bayern Munchen</td>
                  <td align="center">372</td>
                </tr>                
                <tr>
                  <td><img src="../img/1278105613.png" alt="FC Barcelona Logo" width="50px" height="50px">Fútbol Club Barcelona</td>
                  <td align="center">333</td>
                </tr>                
                <tr>
                  <td><img src="../img/Juventus-logo.png" alt="Juventus Logo" width="50px" height="50px" style="padding: 5px;">Juventus</td>
                  <td align="center">295</td>
                </tr>
                <tr>
                  <td><img src="../img/Manchester_United_FC.webp" alt="Manchester United Futball Club Logo" width="50px" height="50px">Manchester United</td>
                  <td align="center">293</td>
                </tr>
              </thbody>
            </table>
            <br>
            <br> 
            <h5>Más Victorias</h5>
            <table class="table table-bordered" bgcolor='#FFF'>
              <thead>
                <tr>
                  <th>Equipo</th>
                  <th>Victorias</th>
                </tr>
              </thead>
              <thbody>
                <tr>
                  <td><img src="../img/realmadrid.png" alt="Real Madrid Logo">Real Madrid</td>
                  <td align="center">275</td>
                </tr>
                <tr>
                  <td><img src="../img/fc-bayern-munchen-logo.png" alt="FC Bayern Munchen Logo" width="50px" height="50px">FC Bayern Munchen</td>
                  <td align="center">221</td>
                </tr>
                <tr>
                  <td><img src="../img/1278105613.png" alt="FC Barcelona Logo" width="50px" height="50px">Fútbol Club Barcelona</td>
                  <td align="center">195</td>
                </tr> 
                <tr>
                  <td><img src="../img/Manchester_United_FC.webp" alt="Manchester United Futball Club Logo" width="50px" height="50px">Manchester United</td>
                  <td align="center">160</td>
                </tr>                               
                <tr>
                  <td><img src="../img/Juventus-logo.png" alt="Juventus Logo" width="50px" height="50px" style="padding: 5px;">Juventus</td>
                  <td align="center">152</td>
                </tr>
              </thbody>
            </table>
            <br>
            <br>            
          </div>
       
      </article> 

<footer>
    <br>
        	<section>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12">
                    <div>
        			   
        			      <a title="UEFA.org en Twitter" href="https://twitter.com/uefa?lang=en-gb" target=...><img src="../img/twitter_w.png" alt="Twitter" widht="40" height ="40"></a>
        			      <span class="sr-only">UEFA.org en Twitter</span>
        			      </a>
        			 
        			    
        			      <a title="UEFA.org en Facebook" href="https://www.facebook.com/uefa/?fref=ts" target=...><img src="../img/facebook_w.png" alt="Facebook" widht="55" height ="55"></a>
        			      <span class="sr-only">UEFA.org en Facebook</span>
        			      </a>

        			      <a title="UEFA.org en Youtube" href="https://www.youtube.com/user/UEFA" target=...><img src="../img/youtube_w.png" alt="Youtube" widht="55" height ="55"></a>
        			       <span class="sr-only">UEFA.org en Youtube</span>
        			      </a>
        			    
        			  
        			      <a title="UEFA.org en Instagram" href="https://www.instagram.com/uefa_official/?hl=en" target=...><img src="../img/instagram_w.png" alt="Instagram" widht="40" height ="40"></a>
        			      <span class="sr-only">UEFA.org en Instagram</span>
        			      </a>
        			    	
        			    <br><br>

                    </div>
                  </div>
                </div>
              </div>
          </section>

          <section class="section footer-nav-neutral">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12">
                    <div >
                      <p>&copy; 1998-2022 UEFA. Todos los derechos reservados</p>
                      <p>La palabra UEFA, el logo de la UEFA y todas las marcas relacionadas con las competiciones de la UEFA están protegidas por las marcas registradas y/o por el copyright de UEFA. Se prohíbe el uso de estas marcas registradas para uso comercial. El uso de UEFA.com significa la aceptación de sus Términos, Condiciones y Política de Privacidad.</p>
                    </div>
                  </div>
                </div>
              </div>
          </section>

</footer>
    
</body>
</html>