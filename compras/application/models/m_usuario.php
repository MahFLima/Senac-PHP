<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_usuario extends CI_Model
{

    public function inserir($usuario, $senha, $nome, $tipo_usuario)
    {
        // $this->db->query("insert into usuarios (usuario, senha, nome, tipo)
        // values('$usuario', md5('$senha)', '$nome', '$tipo_usuario')");
        $user = $this;

        $retorno = $this->db->query("select * from usuarios where usuario = '$usuario'");

        if ($retorno->num_rows() > 0) {
            $dados = array('codigo' => 7, 'msg' => 'Usuário já existe');
        } else {
            $user->db->query("insert into usuarios (usuario, senha, nome, tipo)
            values('$usuario', md5('$senha'), '$nome', '$tipo_usuario')");

            if ($this->db->affected_rows() > 0) {
                $dados = array('codigo' => 1, 'msg' => 'Usuario cadastrado corretamente');
            } else {
                $dados = array('codigo' => 6, 'msg' => 'Houve algum problema na inserção na tabela de usuários');
            }
        }

        return $dados;
    }

    public function deletar($usuario)
    {
        $this->db->query("delete from usuarios where usuario = '$usuario'");

        if ($this->db->affected_rows() > 0) {
            $dados = array('codigo' => 1,'msg' => 'Usuário deletado com sucesso');
        } else {
            $dados = array('codigo' => 6,'msg' => 'Houve algum problema na exclusão da tabela de usuários');
        }
        return $dados;
    }

    public function atualizasenha($usuario, $senhaAtual, $senhaNova){
        $this->db->query("update usuarios set senha = md5('$senhaNova') where usuario = '$usuario' and senha = md5('$senhaAtual')");

        if ($this->db->affected_rows() > 0) {
            $dados = array('codigo' => 1,'msg' => 'Senha atualizada com sucesso');
        } else {
            $dados = array('codigo' => 5,'msg' => 'Houve algum problema na atualização da senha');
        }
        return $dados;
    }

    public function consultar($usuario, $nome, $tipo_usuario){
        $sql = "select * from usuarios where state = '' ";

        if(trim($usuario) != ''){
            $sql = $sql . "and usuario = '$usuario' ";
        }

        if(trim($tipo_usuario) != ''){
            $sql = $sql . "and tipo = '$tipo_usuario' ";
        }

        if(trim($nome) != ''){
            $sql = $sql . "and nome like '%$nome%' ";
        }

        $retorno = $this->db->query($sql);

        if($retorno->num_rows() > 0){
            $dados = array('codigo' => 1, 'msg' => 'Consulta efetuada com sucesso', 'dados' => $retorno->result());
        } else {
            $dados = array('codigo' => 6, 'msg' => "Dados não encontrados");
        }

        return $dados;
    }

    public function alterar($usuario, $nome, $senha, $tipo_usuario){
        $this->db->query("update usuarios set nome = '$nome', tipo = '$tipo_usuario' where usuario = '$usuario' and senha = '$senha' ");

        if($this->db->affected_rows() > 0){
            $dados = array('codigo' => 1, 'msg' => 'Usuario atualizado corretamente');
        } else {
            $dados = array('codigo' => 6, 'msg' => 'Houve algum problema na atualização na tabela usuarios');
        }

        return $dados;
    }

}
