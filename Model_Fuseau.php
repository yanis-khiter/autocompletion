<?php

class Fuseau{

    public $pdo;

    public function __construct(){
    $pdo = new PDO('mysql:host=localhost;dbname=autocompletion;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $this->pdo = $pdo;

    }
    public function searchstart($fuseau){

        $tab = array(
            'start' => [],
            'contain'=>[]
        );
            $query = $this->pdo->prepare("SELECT * FROM `fuseau_monde` WHERE nom LIKE CONCAT ('$fuseau','%')");
            $query->setFetchMode(\PDO::FETCH_ASSOC);
            $query->execute();
            $fuseaustart=$query->fetchall();
        
            if(!empty($fuseaustart[0])){
                $tab = array(
                    'start' => $fuseaustart,
                    'contain'=> []
                );
            }
        
        
            $query = $this->pdo->prepare("SELECT * FROM `fuseau_monde` WHERE nom LIKE CONCAT ('%','$fuseau','%') AND nom NOT LIKE CONCAT ('$fuseau', '%')");
            $query->setFetchMode(\PDO::FETCH_ASSOC);
            $query->execute();
            $contain=$query->fetchall();
          
            if(!empty($contain[0])){
                $tab = array(
                    'start' => $fuseaustart,
                    'contain'=> $contain
                );
            }
            // var_dump($tab['contain']);
            // for($i = 0; $i < $tab['contain'][$i];$i++){
            //     foreach($tab['start'] as $element){
            //         if($element['nom'] == $tab['contain'][$i]['nom']){
            //             array_splice($tab['contain'],$i,1);
            //         }
            //     }
            // }
            
        return $tab; 

    }

    public function resultelement($id){
        $query = $this->pdo->prepare("SELECT * FROM `fuseau_monde` WHERE id = '$id'");
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $query->execute();
        $content = $query->fetchAll();
        return $content;
    }
 
}