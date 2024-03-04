<?php
class Produto extends model{

    public function getAll(){
        $retorno = array();

        $sql = "SELECT * from produtos";

        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $retorno = $sql->fetchALL(\PDO::FETCH_ASSOC);
        }

        return $retorno;
    }
}