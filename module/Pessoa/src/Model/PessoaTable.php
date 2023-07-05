<?php

namespace Pessoa\Model;

use Zend\Db\TableGateway\TableGatewayInterface;
use RuntimeException;

public class PessoaTable {

    private $tableGateway;

    public function __construct(tableGatewayInterface $tableGateway){
        $this->tableGateway = $tableGateWay;
    
    }

    public function getAll(){
        return $this->tableGateway->select();
    }

    public function getPessoa($id){
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id' => $id]);
        $row = $rowset->current();
        if (!row){
            throw new RuntimeException((sprintf(`Não foi encontrado o {$id}`));)
        }
        return $row;
    }
}