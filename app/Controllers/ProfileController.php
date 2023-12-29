<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
        
        // Redirect to namelist.php
        return redirect()->to('namelist');
    }
}
