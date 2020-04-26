<?php



class connection

{

    public static function make($config)

    {


      try {

      return NEW PDO (

            $config['connection'].';dbname='.$config['name'],
            $config['username'],
            $config['password'],
            $config ['options']

      );

      } catch (PDOException $e) {

        die ($e->getmessage());
      }

    }


}
