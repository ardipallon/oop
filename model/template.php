<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 18.01.2018
 * Time: 10:22
 */

class template
{
    // template objekti/klassi omadused
    var $file = ''; // html vaade faili nimi
    // html vaade faili sisu, mis on klassis vastava funktsiooni abil loetud
    var $content = false;
    // html vaade sablooni täitmiseks
    var $vars = array();

    /**
     * template constructor.
     * @param string $file
     */
    public function __construct($file)
    {
        $this->file = $file;
        $this->loadFile();
    }
    // template klassi meetodid
    // html vaade faili sisu lugemine
    function readFile($file){
        $fp = fopen($file, 'rb');
        $this->content = fread($fp, filesize($file));
        fclose($fp);
        $this->content = file_get_contents($file);
    }
    // html vaade faili sisu kontrollimine ja kasutusele võtmine
    function loadFile(){
        $file = $this->file; //abitasendus
        // kontrollime html vaadete kausta olemasolu
        if(!is_dir(VIEWS_DIR)){
            echo 'Kataloogi '.VIEWS_DIR.' ei ole leitud<br />';
            exit;
        }
        // kui html vaade faili nimi antakse kujul: test.html
        $file = $this->file; // abiasendus
        if(file_exists($file) and is_file($file) and is_readable($file)){
            //loeme sisu failist
            $this->readFile($file);
        }
        // kui html vaade faili nimi antakse kujul: /test
        $file = VIEWS_DIR.$this->file.'.html';
        if(file_exists($file) and is_file($file) and is_readable($file)){
            // loeme sisu failist
            $this->readFile($file);
        }
        // kui html vaade faili nimi antakse kujul: katse.test -> views/katse/test.html
        $file = VIEWS_DIR.str_replace('.', '/', $this->file).'.html';
        if(file_exists($file) and is_file($file) and is_readable($file)){
            // loeme sisu failist
            $this->readFile($file);
        }
        if($this->content === false){
            echo 'Ei suutnud lugeda faili '.$this->this.'<br />';
        }
    }

    //$this->vars massiivi täiendamine väärtuste paaridega
    // kujul 'malli elemendi nimi'=>'reaalne väärtus'
    function set($name, $value){
        $this->vars[$name] = $value;
    }

    // $this->vars massivi täiendamine väärtuste paaridega
    // kujul 'malli elemendi nimi'=>'reaalne väärtus' siis kui
    // malli elemendi nimi juba eksisteerib koos eelmise väärtusega
    function add($name, $value){
        if(!isset($this->vars[$name])){
            $this->set($name, $value);
        } else {
            $this->vars[$name] = $this->vars[$name].$value;
        }
    }

    //malli elementide asendamine reaalväärtustega
    //vastavalt elementide nimedele
    function parse(){
        $str = $this->content; // sisu mida pole veel asendatud
        foreach ($this->vars as $name=>$value){
            $str = str_replace('{'.$name.'}', $value, $str);
        }
        return $str; // tagastame asendatud sisu
    }
}