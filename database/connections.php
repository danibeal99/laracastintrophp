<<?php


class connection

{

    public static function make()

    {


      try {

      return NEW PDO('mysql:host=127.0.0.1;dbname=mytodos','dani2','danimatt22');

      } catch (PDOException $e) {

        die ($e->getmessage());
      }

    }


}
