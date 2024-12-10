<?php
function short($length = 10) {
    $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($char);
    $urlshort = '';
    for ($i = 0; $i < $length; $i++) {
        $urlshort .= $char[random_int(0, $charactersLength - 1)];
    }
    return $urlshort;
}
class short{
    private $url_long;
    private $url_short;
    public function __construct($url_long){
        $this->url_long = $url_long;
    }
    public function url_short(){
        require "mysql.php";    
        $this->url_short = short();    
        $stmt = $database->query("INSERT INTO short_urls (url_long, url_short) VALUES ('" . $this->url_long . "', '" . $this->url_short . "')");
        $stmt->fetch();
        return $this->url_short;
    }
}
class redirect {
    private $url_short;
    public function __construct($url_short){
        $this->url_short = $url_short;
        $this->url_long = $url_long;
    }
    public function redirect(){
        require "mysql.php";      
        $stmt = $database->query("SELECT * FROM short_urls WHERE url_short = '" . $this->url_short . "'");
        $result = $stmt->fetch();
        
        if($result){
            return $result["url_long"];
        }
        else{
            return "error";
        }
    }
}