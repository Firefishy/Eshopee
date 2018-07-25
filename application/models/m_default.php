<?php

class M_default extends CI_Model {
    function __construct() {
        parent::__construct();
        $connection = new MongoDB\Client("mongodb://".HOSTNAME_MONGO.":".PORT_MONGO);
        $this->eshopdb = $connection->eshop;
    }
    function getPromo($find,$sort)
    {
        $res=[];
        $result=$this->eshopdb->promo->find($find,$sort);
        foreach ($result as $document) {
            array_push($res, $document);
        }
    	return $res;
    }
    function getCategories($find,$sort)
    {
        $res=[];
        $result=$this->eshopdb->category->find($find,$sort);
        foreach ($result as $document) {
            array_push($res, $document);
        }
        return $res;
    }
    function insertUser($data)
    {
        $result=$this->eshopdb->user->insertOne($data);
        return $result;
    }
    function getUser($find)
    {
        $result=$this->eshopdb->user->aggregate([
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
        $this->eshopdb->category->insertOne($data);
    }
    function updateCategories($find,$data)
    {
        $this->eshopdb->category->updateOne($find,['$set' => ['country' => 'us']]);
    }
    function deleteCategories($find)
    {
        $this->eshopdb->category->deleteMany($find);
    }
}