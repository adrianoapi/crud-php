<?php

class Helper
{
    
    /**
     * Converte data br em sql
     * @param type $name $value
     */
    public function dataToSql($value)
    {
        $data = explode('/', $value);
        return $data[2] . '-' . $data[1] . '-' . $data[0];
    }
    
    /**
     * Converte data sql em br
     * @param type $name $value
     */
    public function dataToBr($value)
    {
        $data = explode('-', $value);
        return $data[2] . '/' . $data[1] . '/' . $data[0];
    }
}