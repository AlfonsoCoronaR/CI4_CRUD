<?php namespace App\Models;

    use CodeIgniter\Model;

    class Crudmodel extends Model{
        
        public function insertar($datos){
            $Nombres = $this->db->table('data');
            $Nombres->insert($datos);
            return $this->db->insertID();
        }
        
        public function insertarNuevo($datos){
            $Nuevo = $this->db->table('data');
            $Nuevo->insert($datos);
            return $this->db->insertID();
        }

        public function obtenerDatos($data){
            $Nombres = $this->db->table('data');
            $Nombres->where($data);
            return $Nombres->get()->getResultArray();
        }

        public function actualizar($data, $idNombre){
            $Nombres = $this->db->table('data');
            $Nombres->set($data);
            $Nombres->where('id_nombre', $idNombre);
            return $Nombres->update();
        }

        public function eliminar($data){
            $Nombres = $this->db->table('data');
            $Nombres->where($data);
            return $Nombres->delete();
        }
        
        public function tabla(){
            $Nombres = $this->db->query("Select * from data");
            return $Nombres->getResult();
        }

        public function inicio(){
            return 0;
        }

        public function validar($data){
            $Usuario = $this->db->table('data');
            $Usuario->where($data);
            return $Usuario->get()->getResultArray();  
        }

    }