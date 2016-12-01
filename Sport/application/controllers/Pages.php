<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 2016/11/29
 * Time: 下午1:02
 */
class Pages extends CI_Controller {

    public function view($page = 'home')
    {

        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('pages/'.$page, $data);
    }
}