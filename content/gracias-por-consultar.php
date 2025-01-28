<?php
$token = $_POST['recaptcha_token'];
$clave_secreta = '6LeArNkpAAAAAI2Bt5yTJlAevnGYqzkHox_3584B';
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => $clave_secreta,
    'response' => $token
);

$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$respuesta = json_decode($response);

if ($respuesta->success) {
    // Establece la zona horaria a GMT-5 (Hora Estándar del Este)
		date_default_timezone_set('America/Lima');

		// Obtiene la fecha y hora actual en GMT-5
		$fechaHoraEnvio = date('Y-m-d H:i:s');
		// Sanitiza los datos del formulario
		$nombre = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
		$correo = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
		$telefono = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
		$ruc = isset($_POST['ruc']) ? htmlspecialchars($_POST['ruc']) : '';
		$cargo = isset($_POST['cargo']) ? htmlspecialchars($_POST['cargo']) : '';
		$razon = isset($_POST['razon']) ? htmlspecialchars($_POST['razon']) : '';
		$message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
		$url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

		// Procesa los datos como desees, por ejemplo, enviándolos por correo
		$destinatario = "berenisse.diaz@cmramazzini.com";
		$asunto = "Nuevo formulario de contacto";
		$mensaje = "Nombre: $nombre\n";
		$mensaje .= "Correo: $correo\n";
		$mensaje .= "Teéfono: $telefono\n";
		$mensaje .= "RUC: $ruc\n";
		$mensaje .= "Razón social: $razon\n";
		$mensaje .= "Cargo: $cargo\n";
		$mensaje .= "Fecha: $fechaHoraEnvio\n";
		$mensaje .= "Mensaje: $message\n";
		$mensaje .= "Enviado desde: $url\n";
		// Nombre y dirección de correo del remitente personalizado
		$nombreRemitente = "Ramazzini";
		$correoRemitente = "web@cmramazzini.com";

		// Formatea el remitente con nombre y dirección de correo
		$remitente = "$nombreRemitente <$correoRemitente>";

		// Encabezados adicionales para definir el remitente
		$headers = "From: $remitente\r\n";

		// Dirección de correo para la copia oculta (BCC)
		$copiaOculta = "pablo.palacios@medicca.pe,ppalaciosf@gmail.com,bdiaz.ramazzini@gmail.com";

		// Agregar encabezado Bcc para copia oculta si es necesario
		$headers .= "Bcc: $copiaOculta\r\n";

		// Establece la dirección de respuesta (Reply-To) si es necesario
		$headers .= "Reply-To: $remitente\r\n";

		mail($destinatario, $asunto, $mensaje, $headers);

		// Muestra los datos al usuario
		include 'respuesta.php'; // Puedes crear un archivo respuesta.php con la respuesta al usuario.
} else {
    // Manejar la validación del reCAPTCHA fallida
    echo "Validación de reCAPTCHA fallida";
}
?>
