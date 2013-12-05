<?php
 class ValidarModel extends CI_Model {
 
 function validarModel() {
  parent::__construct(); 
  $this->load->database();
  }

 function obtenerAdministrativos() {
    $sql="SELECT * FROM administrativos WHERE Status='0'";
    $administrativos=mysql_query($sql);
    echo "<meta charset=UTF-8>";
    //Mostrar los registros de administrativos
    echo "<b><p ALIGN=center>Cuentas de Administrativos</p></b>";
    echo "<TABLE BORDER='1' width=50% align=center>";
    echo "<b><TR align=center><TD><b>Cédula</b></TD><TD><b>Nombre</bd></TD><td><b>Correo</b></td><td><b>Contraseña</b></td></TR></b>";
    while ($row=mysql_fetch_array($administrativos))
    {
      echo "<TR><TD>".$row["Cédula"]."</TD><TD>".$row["Nombre_Completo"]."</TD><td>".$row["Correo"]."</td><td>".$row["Contraseña"]."</td></TR>";
    }
    echo "</TABLE>";
    echo "<BR>";

    $sql="SELECT * FROM profesores WHERE Status='0'";
    $profesores=mysql_query($sql);

    //Mostrar los registros de profesores
    echo "<b><p ALIGN=center>Cuentas de Profesores</p></b>";
    echo "<TABLE BORDER='1' width=50% align=center>";
    echo "<b><TR align=center><TD><b>Cédula</b></TD><TD><b>Nombre</bd></TD><td><b>Correo</b></td><td><b>Contraseña</b></td></TR></b>";
    while ($row=mysql_fetch_array($profesores))
    {
      echo "<TR><TD>".$row["Cédula"]."</TD><TD>".$row["Nombre_Completo"]."</TD><td>".$row["Correo"]."</td><td>".$row["Contraseña"]."</td></TR>";
    }
    echo "</TABLE>";
    echo "<BR>";

    $sql="SELECT * FROM estudiantes WHERE Status='0'";
    $estudiantes=mysql_query($sql);

   //Mostrar los registros de estudiantes
    echo "<b><p ALIGN=center>Cuentas de Estudiantes</p></b>";
    echo "<TABLE BORDER='1' width=50% align=center>";
    echo "<b><TR align=center><TD><b>Cédula</b></TD><TD><b>Nombre</bd></TD><td><b>Correo</b></td><td><b>Contraseña</b></td></TR></b>";
    while ($row=mysql_fetch_array($estudiantes))
    {
      echo "<TR><TD>".$row["Cédula"]."</TD><TD>".$row["Nombre_Completo"]."</TD><td>".$row["Correo"]."</td><td>".$row["Contraseña"]."</td></TR>";
    }
    echo "</TABLE>";
         
}

  function update() {
      //------------------envia correo a administrativos------------------
      $sqlcorreoad="SELECT * FROM administrativos WHERE Status='0'";
      $administrativos=mysql_query($sqlcorreoad);
      while ($row=mysql_fetch_array($administrativos))
      {
         if (mail($row['Correo'], 'Validación de cuenta', 
              'Hola '. $row['Nombre_Completo'].' Su cuenta ha sido validada puede ingresar a la página.'
              )) {
                  echo " ";
              }else{
                  echo " ";
              }
      }
      //------------------envia correo a profesores------------------
      $sqlcorreopf="SELECT * FROM profesores WHERE Status='0'";
      $profesores=mysql_query($sqlcorreopf);
      while ($row=mysql_fetch_array($profesores))
      {
         if (mail($row['Correo'], 'Validación de cuenta', 
              'Hola '. $row['Nombre_Completo'].' Su cuenta ha sido validada puede ingresar a la página.'
              )) {
                  echo " ";
              }else{
                  echo " ";
              }
      }
      //------------------envia correo a estudiantes------------------
      $sqlcorreoes="SELECT * FROM estudiantes WHERE Status='0'";
      $estudiantes=mysql_query($sqlcorreoes);
      while ($row=mysql_fetch_array($estudiantes))
      {
         if (mail($row['Correo'], 'Validación de cuenta', 
              'Hola '. $row['Nombre_Completo'].' Su cuenta ha sido validada puede ingresar a la página.'
              )) {
                  echo " ";
              }else{
                  echo " ";
              }
      }
      //hace el cambio de status de  0 a 1
      $sql1="UPDATE administrativos Set Status='1' WHERE Status='0'";
      $sql2="UPDATE profesores Set Status='1' WHERE Status='0'";
      $sql3="UPDATE estudiantes Set Status='1' WHERE Status='0'";

      //ejecuta las consultas
      mysql_query($sql1) or die ("problema con query1");
      mysql_query($sql2) or die ("problema con query2");
      mysql_query($sql3) or die ("problema con query3");
  }
}
?>