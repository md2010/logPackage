<?php

namespace MD\Logger;

class Logger
{
    protected $filePath;

    public function setFilePath(String $path)
    {
        $this->filePath = $path;
    }

    public function info(String $message)
    {
        $text = 'LOG INFO: '.$message;
        file_put_contents($this->filePath, PHP_EOL .$text, FILE_APPEND);
    }

    public function alert(String $message)
    {
        $text = 'LOG ALERT: '.$message;
        file_put_contents($this->filePath, PHP_EOL .$text, FILE_APPEND);
    }

    public function emergency(String $message)
    {
        $text = 'LOG EMERGENCY: '.$message;
        file_put_contents($this->filePath, PHP_EOL .$text, FILE_APPEND);
    }

    public function critical(String $message)
    {
        $text = 'LOG CRITICAL: '.$message;
        file_put_contents($this->filePath, PHP_EOL .$text, FILE_APPEND);
    }

    public function error(String $message)
    {
        $text = 'LOG ERROR: '.$message;
        file_put_contents($this->filePath, PHP_EOL .$text, FILE_APPEND);
    }

    public function warning(String $message)
    {
        $text = 'LOG WARNING: '.$message;
        file_put_contents($this->filePath, PHP_EOL .$text, FILE_APPEND);
    }

    public function notice(String $message)
    {
        $text = 'LOG NOTICE: '.$message;
        file_put_contents($this->filePath, PHP_EOL .$text, FILE_APPEND);
    }

    public function debug(String $message)
    {
        $text = 'LOG DEBUG: '.$message;
        file_put_contents($this->filePath, PHP_EOL .$text, FILE_APPEND);
    }
     
}