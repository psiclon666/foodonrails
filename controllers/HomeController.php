<?
namespace Controller;

use Controller\BaseController as BaseControllerParent;
use Model\SafeMySQL as SafeMySQL;

class HomeController extends BaseControllerParent
{   
    public function api($req, $res, $args)
    {
        return $this->send($res,'ok', 200);
    }
    
    public function reg($req, $res, $args)
    {
        $db = new SafeMySQL();
        if (isset($_POST['submit'])&&!empty($_POST['email'])) {
            $result= $db->query("INSERT INTO restoran (name, face, inn, adress, schet, bank, bik, pochta, telefon, email, password) VALUES (?s, ?s, ?s, ?s, ?s, ?s, ?s, ?s, ?s, ?s, ?s)", $_POST['name'], $_POST['face'], $_POST['inn'], $_POST['adress'], $_POST['schet'], $_POST['bank'], $_POST['bik'], $_POST['pochta'], $_POST['telefon'], $_POST['email'], $_POST['password']);
            $id=$db->getOne("SELECT id FROM restoran WHERE email=?s", $_POST['email']);
            $_SESSION["id"]=$id;
            return $this->send($res,$this->vr_view('about'), 200);    
        }
        return $this->send($res,$this->vr_view('reg'), 200);
    }
    
    public function logout($req, $res, $args)
    {
        unset($_SESSION["id"]);
        return $this->send($res,$this->vr_view('login'), 200);
    }
    
    public function form($req, $res, $args)
    {
        return $this->send($res,$this->vr_view('reg'), 200);
    }
    
    public function login($req, $res, $args)
    {
        $db = new SafeMySQL();
        if (isset($_POST['login'])&&!empty($_POST['email'])) {
            $data=$db->getRow("SELECT id, password FROM restoran WHERE email=?s", $_POST['email']);
            if($_POST['password']== $data['password'])
            {
                $db = new SafeMySQL();
        $d=$db->getRow("SELECT name, face, inn, adress, schet, bank, bik, pochta, telefon, email, password FROM restoran WHERE id=?s", $_SESSION["id"]);
        
                $_SESSION["id"]=$data['id'];
                return $this->send($res,$this->vr_view('about', $d), 200);
            }
        }
        if (isset($_POST['reg'])) {
            return $this->send($res,$this->vr_view('reg'), 200);
        }
        return $this->send($res,$this->vr_view('login'), 200);
    }
    
    public function post_add_dishes($req, $res, $args)
    {
        #print_r($_POST);
        #echo $_SESSION["id"];
        if($_SESSION["id"]>0){
        $db = new SafeMySQL();
        $currentDir = getcwd();
        $uploadDirectory = "/uploads/";

        $errors = []; // Store all foreseen and unforseen errors here

        $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

        $fileName = $_FILES['upload']['name'];
        $fileSize = $_FILES['upload']['size'];
        $fileTmpName  = $_FILES['upload']['tmp_name'];
        $fileType = $_FILES['upload']['type'];
        $fileNameCmps = explode(".", $fileName);
		$fileExtension = strtolower(end($fileNameCmps));
        $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 
        $path = $uploadDirectory . basename($fileName);
        if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 20000000) {
            $errors[] = "This file is more than 20MB. Sorry, it has to be less than or equal to 20MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                ###############
                
                #echo "The file " . basename($fileName) . " has been uploaded";
                $result= $db->query("INSERT INTO dishes (url, name, des, cost, time) VALUES (?s, ?s, ?s, ?s, ?s)",$path, $_POST['name'], $_POST['des'], $_POST['cost'], $_POST['time']);
                
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
        }



        return $this->send($res,$this->vr_view('dishes'), 200);
        }
        else
        {
            return $this->send($res,$this->vr_view('login'), 200);
        }
    }
    
    public function rest($req, $res, $args)
    {
        return $this->send($res,$this->vr_view('rest'), 200);
    }
    
    public function get_dishes($req, $res, $args)
    {

        if($_SESSION["id"]>0){
        return $this->send($res,$this->vr_view('dishes'), 200);
        }
        else
        {
            return $this->send($res,$this->vr_view('login'), 200);
        }
    }
    
    public function get_about($req, $res, $args)
    {
        $db = new SafeMySQL();
        $data=$db->getRow("SELECT name, face, inn, adress, schet, bank, bik, pochta, telefon, email, password FROM restoran WHERE id=?s", $_SESSION["id"]);
        if($_SESSION["id"]>0){
        return $this->send($res,$this->vr_view('about', $data), 200);
        }
        else
        {
            return $this->send($res,$this->vr_view('login'), 200);
        }
    }
    
    public function add_dishes($req, $res, $args)
    {

        if($_SESSION["id"]>0){
        return $this->send($res,$this->vr_view('add_dishes'), 200);
        }
        else
        {
            return $this->send($res,$this->vr_view('login'), 200);
        }
    }
    ####################################
    public function admin($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin.html'), 200);
    }
    
    public function admin_2018($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_2018.html'), 200);
    }
    
    public function admin_bank($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_bank.html'), 200);
    }
    
    public function admin_bank_arhiv($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_bank_arhiv.html'), 200);
    }
    
    public function admin_buh($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_buh.html'), 200);
    }
    
    public function admin_center($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_center.html'), 200);
    }
    
    public function admin_dog($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_dog.html'), 200);
    }
    
    public function admin_dog_arhiv($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_dog_arhiv.html'), 200);
    }
    
    public function admin_du($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_du.html'), 200);
    }
    
    public function admin_fin($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_fin.html'), 200);
    }
    
    public function admin_fin_arhiv($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_fin_arhiv.html'), 200);
    }
    
    public function admin_monitor($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_monitor.html'), 200);
    }
    
    public function admin_rep($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_rep.html'), 200);
    }
    
    public function admin_rep_arhiv($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_rep_arhiv.html'), 200);
    }
    
    public function admin_stat($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_stat.html'), 200);
    }
    
    public function admin_vzr($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_vzr.html'), 200);
    }
    
    public function admin_vzr_arhiv($req, $res, $args)
    {
        return $this->send($res,$this->va_view('admin_vzr_arhiv.html'), 200);
    }
}	
?>