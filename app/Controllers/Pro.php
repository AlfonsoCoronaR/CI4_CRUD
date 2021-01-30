<?php namespace App\Controllers;

	use App\Models\Crudmodel;

class Pro extends BaseController
{
	public function index()
	{
		$Crud = new Crudmodel();
		$datos = $Crud->listado();

		$mensaje = session('mensaje');

		$data = [
					"datos" => $datos,
					"mensaje" => $mensaje
				];

		return view('estructura/header').view('index', $data).view('estructura/footer');
	}

	public function crear(){
		$password = $this->request->getPost('password');
		$dato = password_hash($password, PASSWORD_DEFAULT);
		$datos = [
					"Nombre" => $_POST['nombre'],
					"Ap_paterno" => $_POST['paterno'],
					"Ap_materno" => $_POST['materno'],
					"type" => $_POST['privilegios'],
					"password" => $dato
		];
		$Crud = new Crudmodel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/tabla')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/tabla')->with('mensaje','0');
		}
	}

	public function nuevoUsuario(){
		$password = $this->request->getPost('password');
		$dato = password_hash($password, PASSWORD_DEFAULT);
		$datos = [
				"Nombre" => $_POST['nombre'],
				"Ap_paterno" => $_POST['paterno'],
				"Ap_materno" => $_POST['materno'],
				"password" => $dato
				];
		$Crud = new Crudmodel();
		$respuesta = $Crud->insertarNuevo($datos);

		return redirect()->to(base_url().'/');
	}

	public function actualizar(){
		$datos = [
			"Nombre" => $_POST['nombre'],
			"Ap_paterno" => $_POST['paterno'],
			"Ap_materno" => $_POST['materno']
		];
		$idNombre = $_POST['idNombre'];

		$Crud = new Crudmodel();

		$respuesta = $Crud->actualizar($datos,$idNombre);

		if ($respuesta){
			return redirect()->to(base_url().'/')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','3');
		}
	}

	public function obtenerDatos($Nombre){
		$data = ["Nombre" => $Nombre];
		$Crud = new Crudmodel();
		$respuesta = $Crud->obtenerDatos($data);
		$datos = ["datos" => $respuesta];
		
		return view('estructura/header').view('actualizar', $datos).view('estructura/footer');
	}

	public function eliminar($Nombre){
		$Crud = new Crudmodel();
		$data = ["Nombre" => $Nombre];
		$respuesta = $Crud->eliminar($data);

		if ($respuesta){
			return redirect()->to(base_url().'/tabla')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/tabla')->with('mensaje','5');
		}
	}

	public function tabla(){
		$Crud = new Crudmodel();
		$datos = $Crud->tabla();

		$mensaje = session('mensaje');

		$data = [
					"datos" => $datos,
					"mensaje" => $mensaje
				];

		echo view('estructura/header');
		echo view('tabla', $data);
		echo view('estructura/footer');
	}

	public function inicio(){

		$Crud = new Crudmodel();
		$dato = $Crud->inicio();
		$mensaje = session('mensaje');
		
		$datos = [
					"mensaje" => $mensaje
				];

		echo view('estructura/header');
		echo view('index', $datos);
		echo view('estructura/footer');
	}

	public function login(){
		echo view('login');
	}

	public function validar(){
		$nombre = $this->request->getPost('nombre');
		$password = $this->request->getPost('password');

		$Usuario = new Crudmodel();

		$datosUsuario = $Usuario->validar(['nombre' => $nombre]);

		if(count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password'])){
			$data = [
						"nombre" => $datosUsuario[0]["Nombre"],
						"type" => $datosUsuario[0]["type"]
					];
			$session = session();
			$session->set($data);

			return redirect()->to(base_url().'/tabla');
		}else{
			$data = [
				"nombre" => $datosUsuario[0]["Nombre"],
				"type" => $datosUsuario[0]["type"]
			];
			$session = session();
			$session->set($data);
			return redirect()->to(base_url().'/tabla');
		}
	}

	public function salir(){
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}

	public function nuevo(){
		echo view('nuevo');
	}

	public function vacio(){
		print(" ");
	}

}
