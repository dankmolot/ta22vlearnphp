<?php

class ConsoleLogger implements Logger {
    public function log($message){
        echo $message . "\n";
    }
}

class Task {
    public function work(Logger $logger){

        for($i=0;$i<10;$i++){
            $logger->log($i);
        }
    }
}

interface Logger {
    public function log($message);
}

//
class NothingLogger implements Logger {
    public function log($message){
        
    }
}

class FileLogger implements Logger {
    public function log($message){
        $file = fopen('./log.log', 'a');
        fwrite($file, $message . "\n");
        fclose($file);
    }
}
$logger = new NothingLogger();
$task = new Task();
$task->work($logger);