<?php

class Mdefault extends CI_Model {
    function __construct() {
        parent::__construct();
        $connection = new MongoDB\Client("mongodb://".USERNAME_MONGO.":".PASSWORD_MONGO."@".HOSTNAME_MONGO.":".PORT_MONGO."/kenjishop");
        //$connection = new MongoDB\Client("mongodb://".HOSTNAME_MONGO.":".PORT_MONGO);
        $this->kenjishop=$connection->kenjishop;
    }
    function getPromo($find,$sort)
    {
        $res=[];
        $result=$this->kenjishop->promo->find($find,$sort);
        foreach ($result as $document) {
            array_push($res, $document);
        }
    	return $res;
    }
    function getCategories($find,$sort)
    {
        $res=[];
        $result=$this->kenjishop->category->find($find,$sort);
        foreach ($result as $document) {
            array_push($res, $document);
        }
        return $res;
    }
    function insertUser($data)
    {
        $result=$this->kenjishop->user->insertOne($data);
        return $result;
    }
    function getUser($find)
    {
        $result=$this->kenjishop->user->aggregate([
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
        $this->kenjishop->category->insertOne($data);
    }
    function updateCategories($find,$data)
    {
        $this->kenjishop->category->updateOne($find,['$set' => ['country' => 'us']]);
    }
    function deleteCategories($find)
    {
        $this->kenjishop->category->deleteMany($find);
    }
}
