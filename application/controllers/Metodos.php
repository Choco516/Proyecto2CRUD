<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Metodos extends CI_Controller {


	public function Autenticar()
	{
		$email= $this->input->post('email');
		$clave= $this->input->post('clave');
			
			//--------------------------------ADMINISTRADORES------------------------------------------	
			$sql1=mysql_query("SELECT Correo FROM administrativos WHERE  Contraseña='$clave' AND Status='1'");
			// Esta consulta  da todos los registros de  groupInfo_id de la tabla test donde la fecha de la tabla sea menor que la fecha del sistema y cumpla con la condición que el campo status sea igaul a 1
			while ($recorido1 = mysql_fetch_array($sql1)) {
    		// La variable recorrido almacena el array de la consulta anteriormente realizada 
			$almacenar1=$recorido1['Correo'];
			}

			$sql2=mysql_query("SELECT Contraseña FROM administrativos WHERE  Correo='$email' AND Status='1'");
			// Esta consulta  da todos los registros de  groupInfo_id de la tabla test donde la fecha de la tabla sea menor que la fecha del sistema y cumpla con la condición que el campo status sea igaul a 1
			while ($recorido2 = mysql_fetch_array($sql2)) {
    		// La variable recorrido almacena el array de la consulta anteriormente realizada 
			$almacenar2=$recorido2['Contraseña'];
			}
			//--------------------------------PROFESORES-------------------------------------------	
			$sql3=mysql_query("SELECT Correo FROM profesores WHERE  Contraseña='$clave' AND Status='1'");
			// Esta consulta  da todos los registros de  groupInfo_id de la tabla test donde la fecha de la tabla sea menor que la fecha del sistema y cumpla con la condición que el campo status sea igaul a 1
			while ($recorido3 = mysql_fetch_array($sql3)) {
    		// La variable recorrido almacena el array de la consulta anteriormente realizada 
			$almacenar3=$recorido3['Correo'];
			}

			$sql4=mysql_query("SELECT Contraseña FROM profesores WHERE  Correo='$email' AND Status='1'");
			// Esta consulta  da todos los registros de  groupInfo_id de la tabla test donde la fecha de la tabla sea menor que la fecha del sistema y cumpla con la condición que el campo status sea igaul a 1
			while ($recorido4 = mysql_fetch_array($sql4)) {
    		// La variable recorrido almacena el array de la consulta anteriormente realizada 
			$almacenar4=$recorido4['Contraseña'];
			}
			//--------------------------------ESTUDIANTES-------------------------------------------	
			$sql5=mysql_query("SELECT Correo FROM estudiantes WHERE  Contraseña='$clave' AND Status='1'");
			// Esta consulta  da todos los registros de  groupInfo_id de la tabla test donde la fecha de la tabla sea menor que la fecha del sistema y cumpla con la condición que el campo status sea igaul a 1
			while ($recorido5 = mysql_fetch_array($sql5)) {
    		// La variable recorrido almacena el array de la consulta anteriormente realizada 
			$almacenar5=$recorido5['Correo'];
			}

			$sql6=mysql_query("SELECT Contraseña FROM estudiantes WHERE  Correo='$email' AND Status='1'");
			// Esta consulta  da todos los registros de  groupInfo_id de la tabla test donde la fecha de la tabla sea menor que la fecha del sistema y cumpla con la condición que el campo status sea igaul a 1
			while ($recorido6 = mysql_fetch_array($sql6)) {
    		// La variable recorrido almacena el array de la consulta anteriormente realizada 
			$almacenar6=$recorido6['Contraseña'];
			}
		
		if(($email=="admin@gmail.com") && ($clave=="123"))
		{
			redirect(base_url()."Validar");
		}elseif (($almacenar1==$email) && ($almacenar2==$clave)) {
			redirect(base_url()."Principal");
		}elseif (($almacenar3==$email) && ($almacenar4==$clave)) {
			redirect(base_url()."Principal");
		}elseif (($almacenar5==$email) && ($almacenar6==$clave)) {
			redirect(base_url()."Principal");
		}else{
			redirect(base_url()."Login");
			echo "Usted no está registrado";
		}
	}


public function Registrar()
	{
		$cedula= $this->input->post('cedula');
		$nombre_completo= $this->input->post('nombre_completo');
		$correo= $this->input->post('correo');
		$contrasena= $this->input->post('contrasena');

		if($_POST['credencial']=='Administrativo')
		{
			$sql=mysql_query("INSERT  INTO Administrativos(Cédula,Nombre_Completo,Correo,Contraseña,Status)VALUES('$cedula','$nombre_completo','$correo','$contrasena','0')");
			echo "Usted ha sido añadido a la base de datos, se le enviará un correo cuando el administrador lo autorice";
			redirect(base_url()."Login/Login");
		}elseif ($_POST['credencial']=='Profesor') 
		{
			$sql2=mysql_query("INSERT  INTO Profesores(Cédula,Nombre_Completo,Correo,Contraseña,Status)VALUES('$cedula','$nombre_completo','$correo','$contrasena','0')");
			redirect(base_url()."Login/Login");
		}elseif ($_POST['credencial']=='Estudiante') 
		{
			$sql3=mysql_query("INSERT  INTO Estudiantes(Cédula,Nombre_Completo,Correo,Contraseña,Status)VALUES('$cedula','$nombre_completo','$correo','$contrasena','0')");
			redirect(base_url()."Login/Login");
		}
		
		//$this->load->view('Principal/Index');
	}

	public function Validar()
	{
		
	}
}