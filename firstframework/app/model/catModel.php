<?php

namespace app\model;

class catModel extends model
{
    public $table = 'cat';

    public function lists()
    {
        return parent::select($this->table, '*');
    }

    public function getOne($id)
    {
        //https://medoo.in/api/get
        return parent::get($this->table,'*', array('id' => $id));
    }

    public function setOne($id, $data)
    {
        return parent::update($this->table, $data, array('id' => $id));
    }

    public function delOne($id)
    {
        return parent::delete($this->table, array('id' => $id));
    }
}