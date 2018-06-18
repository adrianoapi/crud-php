<?php

class ServiceCliente
{
    private $db;
    private $cliente;
    
    public function __construct(IConn $db, ICliente $cliente)
    {
        $this->db      = $db->connect();
        $this->cliente = $cliente;
    }
    
    /**
     * Listar clientes
     * @return type
     */
    public function show()
    {
        $query = "select * from `clientes`";
        $stmt  = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchall(\PDO::FETCH_ASSOC);
    }
    
}