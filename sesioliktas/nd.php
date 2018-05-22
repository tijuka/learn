<?php

Class Jokes{

    public function getDB()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "tijosbaze";
        $dsn = "mysql:host=$host;dbname=$db";
        return new PDO($dsn, $user, $password);
    }

    public function getAllJokes()
    {
        $sql = "SELECT * FROM chuck";
        $result=$this->getDB()->query($sql);
        $res= $result->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    
    public function getOneJoke($id)
    {
        $sql = "SELECT * FROM chuck WHERE id = $id";
        $result=$this->getDB()->query($sql);
        $res= $result->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function saveUpdatedJoke($data)
    {
        var_dump($data);
        $sql = "UPDATE chuck SET url=:url, value=:value, icon_url=:icon_url
        WHERE id=:id";
        $sth = $this->getDb()->prepare($sql);
        $sth->execute([
            'id'=>$data['id'],
            'url' => $data['url'],
            'value' => $data['value'],
            'icon_url' =>$data['icon_url']
        ]);
    }
    public function deleteJoke($id)
    {
        $sql = "DELETE FROM chuck WHERE id=:id";
        $sth = $this->getDb()->prepare($sql);
        $sth->execute([
            'id'=>$id,
        ]);
    }
}

$masyvas = [];
$jokes=new Jokes;
foreach($jokes->getAllJokes() as $joke){
    $masyvas[]= $joke;
};









