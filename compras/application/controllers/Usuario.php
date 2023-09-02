<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class usuario extends CI_Controller{
        public function inserir(){

            $json = file_get_contents('php://input');
            $resultado = json_decode($json);

            $usuario = $resultado->usuario;
            $senha = $resultado->senha;
            $nome = $resultado->nome;
            $tipo_usuario = strtoupper($resultado->tipo_usuario);

            if(trim($usuario) == ''){
                $retorno = array('codigo' => 2, 'msg' => 'Usuario não informado');
            } elseif(trim($senha) == ''){
                $retorno = array('codigo' => 3, 'msg' => 'Senha não informada');
            } elseif(trim($nome) == ''){
                $retorno = array('codigo' => 4, 'msg' => 'Nome não informado');
            } elseif ((trim($tipo_usuario) != 'ADMINISTRADOR' && 
                       trim($tipo_usuario) != 'COMUM') || trim($tipo_usuario) == ''){

                $retorno = array('codigo' => 5, 'msg' => 'Tipo de usuário inválido');
            } else {
                $this->load->model('m_usuario');

                $retorno = $this->m_usuario->inserir($usuario, $senha, $nome, $tipo_usuario);
            }

            echo json_encode($retorno);
        }

        public function deletar(){
            $json = file_get_contents('php://input');
            $resultado = json_decode($json);

            $usuario = $resultado->usuario;

            if(trim($usuario) == ''){
                $retorno = array('codigo' => 2, 'msg' => 'Usuario não informado');
            } else {
                $this->load->model('m_usuario');

                $retorno = $this->m_usuario->deletar($usuario);
            }

            echo json_encode($retorno);
        }

        public function atualizasenha(){
            $json = file_get_contents('php://input');
            $resultado = json_decode($json);

            $usuario = $resultado->usuario;
            $senhaAtual = $resultado->senhaAtual;
            $senhaNova = $resultado->senhaNova;

            if(trim($senhaAtual) == ''){
                $retorno = array('codigo' => 4, 'msg' => 'Senha atual não informada');
            } elseif (trim($senhaNova) == ''){
                $retorno = array('codigo' => 3, 'msg' => 'Senha nova não informada');
            } elseif(trim($usuario) == ''){
                $retorno = array('codigo' => 2, 'msg' => 'Usuario não informado');
            } else {
                $this->load->model('m_usuario');

                $retorno = $this->m_usuario->atualizasenha($usuario, $senhaAtual, $senhaNova);
            }

            echo json_encode($retorno);
        }
    }
?>