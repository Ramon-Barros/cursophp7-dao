<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario(){
        return $this->idusuario;
    }

    public function setIdusuario($value) {
        $this->idusuario = $value;
    }

    public function getDeslogin(){
        return $this->deslogin;
    }

    public function setDeslogin($value){
        $this->deslogin = $value;
    }

    public function getDessenha(){
        return $this->dessenha;
    }

    public function setDessenha($value){
        $this->dessenha = $value;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }

    public function setDtcadastro($value){
        $this->dtcadastro = $value;
    }

    public function loadById($id){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE  idusuario = :ID", array(
            ":ID"=>$id
        ));

        if(count($results) > 0) {//validação se tem pelo menos um indice 

            $row = $results[0];
            //dados que foram pegados associativos
            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));//padrão de data e hora.

        }

    } 

    public static function getList(){

        $sql = new Sql();

        return  $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
    }

    public static function search($login){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH'=>"%".$login."%"
        ) );
    }

    public function login($login, $password){

        
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE  deslogin = :USUARIO AND dessenha = :SENHA", array(
            ":USUARIO"=>$login,
            ":SENHA" =>$password
        ));

        if(count($results) > 0) {//validação se tem pelo menos um indice 

            $row = $results[0];
            //dados que foram pegados associativos
            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));//padrão de data e hora.

        }  else {

            throw new Exception ("Login e/ou Senha inválidos");
        }
        
    }

    public function __toString() {

        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));

    }
}

?>