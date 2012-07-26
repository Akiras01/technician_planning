<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Media extends Controller {

    public function action_index() {

        $file = $this->request->param('file');

        $ext = pathinfo($file, PATHINFO_EXTENSION);

        $file = substr($file, 0, -(strlen($ext) + 1));

        $filename = Kohana::find_file('media', $file, $ext);

        if ($filename) {

            $this->request->headers['Content-Type']   = File::mime_by_ext($ext);
            $this->request->headers['Content-Length'] = filesize($filename);
            $this->request->headers['Last-Modified']  = date('r', filemtime($filename));
            echo file_get_contents($filename);
            
        } else {
            $this->request->status = 404;
         
        }       
    }
}
/* EOF **/