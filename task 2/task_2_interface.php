<?php 

interface Logging {
  public function log(string $message);
}

class FileLogging implements Logging {

  private $file_path;
  public function __construct(string $file_path) {
      $this->file_path = $file_path;
  }
  public function log(string $message): void {
      file_put_contents($this->file_path, $message.PHP_EOL, FILE_APPEND);
  }
}

class PrintLogging implements Logging {
  public function log(string $message): void {
      echo $message.PHP_EOL;
  }
}

