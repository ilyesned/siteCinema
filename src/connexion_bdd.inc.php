<?php
      session_start();
      try {
            $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO('mysql:host=localhost;
                            dbname=inedjai', 
                            'root', '',
                            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));

      } catch(PDOException $e) {
            die('Erreur de BDD'.$e->getMessage());
      }
?>