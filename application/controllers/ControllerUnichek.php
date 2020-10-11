<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerUnichek extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    
    public function GetTokenUnichek()
    {
        /* API URL */
        /* API URL */
        $url = 'http://www.mysite.com/api';
             
        /* Init cURL resource */
        $ch = curl_init($url);
            
        /* Array Parameter Data */
        $data = ['grant_type'=>'client_credentials', 'client_id'=>'ad20206ddf95213c4573','client_secret'=>'c94aff353d3cbeacfbe0c86183393024db827759'];
            
        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
           
        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type:application/json',
                ));
            
        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
        /* execute request */
        $result = curl_exec($ch);
           
        /* close cURL resource */
        curl_close($ch);
    }

}
