<?php

class Mdefault extends CI_Model {
    function __construct() {
        parent::__construct();
        $connection = new MongoDB\Client(DBConnection);
        $this->db=$connection->kenjishop;
    }
    function getPromo($find,$sort)
    {
        $res=[];
        $result=$this->db->promo->find($find,$sort);
        foreach ($result as $document) {
            array_push($res, $document);
        }
    	return $res;
    }
    function getCategories($find,$sort)
    {
        $res=[];
        $result=$this->db->category->find($find,$sort);
        foreach ($result as $document) {
            array_push($res, $document);
        }
        return $res;
    }
    function insertUser($data)
    {
        $result=$this->db->user->insertOne($data);
        return $result;
    }
    function getUser($find)
    {
        $result=$this->db->user->aggregate([
            ['$lookup'=>['from'=>'role','localField'=>'Role','foreignField'=>'_id','as'=>'Role']],
            ['$match'=>$find]
        ]);
        $res=[];
        foreach ($result as $value) {
            array_push($res, $value);
        }
        return $res;
    }
    function insertCategories($data)
    {
        $this->db->category->insertOne($data);
    }
    function updateCategories($find,$data)
    {
        $this->db->category->updateOne($find,['$set' => ['country' => 'us']]);
    }
    function deleteCategories($find)
    {
        $this->db->category->deleteMany($find);
    }
}
