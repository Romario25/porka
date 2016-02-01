<?php
namespace app\components;
use DateTime;

/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 29.12.15
 * Time: 19:37
 */
class MyHelper
{
    public static function isClassNew($currentDate){
        return (date_diff(new DateTime(), new DateTime($currentDate))->days < 7);
    }

    public static function runExternal( $cmd) {
        $descriptorspec = array(
            0 => array("pipe", "r"),
            1 => array("pipe", "w"),
            2 => array("pipe", "w")
        );
        $pipes= array();
        $process = proc_open($cmd, $descriptorspec, $pipes);
        $output= "";
        if (!is_resource($process)) return false;
        fclose($pipes[0]);
        stream_set_blocking($pipes[1],false);
        stream_set_blocking($pipes[2],false);
        $todo= array($pipes[1],$pipes[2]);
        while( true ) {
            $read= array();
            if( !feof($pipes[1]) ) $read[]= $pipes[1];
            if( !feof($pipes[2]) ) $read[]= $pipes[2];
            if (!$read) break;
            $ready= @stream_select($read, $write=NULL, $ex= NULL, 2);
            if ($ready === false) {
                break;
            }
            foreach ($read as $r) {
                $s= fread($r,1024);
                $output.= $s;
            }
        }

      //    print_r($output);
        fclose($pipes[1]);
        fclose($pipes[2]);
        $code= proc_close($process);
        //print_r($code);
        return $output;
    }
}