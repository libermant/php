 <?php 
Class Singleton{
    private static $users = null;

    private function __construct($fileName){
        protected $content=[];
        protected $fileName='';

        protected function getFromFile(){
            $this->content=json_decode(file_get_contents($this->fileName),true);           
        }

        protected function setToFile(){
            file_put_contents($this->fileName,json_encode($this->content));
        }
    }

    public static function getUsers () {
        if (self::$users == null) {
        self::$users = new Singleton('Users.json');
        }
        return self::$users;
        }
}