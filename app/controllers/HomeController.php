<?php

class HomeController extends BaseController{
	protected $layout = 'layout.site';
	public function __construct(){
		require 'vendor/facebook/src/facebook.php';
		$facebook = new Facebook(array(
	      'appId'  => '531422446938110',
	      'secret' => '89f52f80fbb6f576677f67906c784171',
	    ));

	    // Get User ID
	    if( $user = $facebook->getUser() ){
	        $img = "https://graph.facebook.com/". $user ."/picture?width=200&height=200";
	        $me = $facebook->api("/$user");

	        View::share('profile_image', $img);
	        View::share('username', $me['username']);
	        View::share('name', $me['name']);
	    }
	}
	public function welcome(){
		return $this->layout->content = View::make('index');
	}
	public function premio(){
		return $this->layout->content = View::make('premio');
	}
	public function inspiracion(){
		$subcatIDs = array();
		$subcats = Categoria::find(3)->subcats()->get();
		foreach($subcats as $subcat){
			array_push($subcatIDs, $subcat->id);
		}
		$files = Archivo::whereIn('subcat_id', $subcatIDs)->get();
		return $this->layout->content = View::make('inspiracion', array('subcats'=>$subcats, 'files'=>$files));
	}
	public function herramientas(){
		$subcatIDs = array();
		$subcats = Categoria::find(2)->subcats()->get();
		foreach($subcats as $subcat){
			array_push($subcatIDs, $subcat->id);
		}
		$files = Archivo::whereIn('subcat_id', $subcatIDs)->get();
		return $this->layout->content = View::make('herramientas', array('subcats'=>$subcats, 'files'=>$files));
	}
	public function documentacion(){
		$subcatIDs = array();
		$subcats = Categoria::find(1)->subcats()->get();
		foreach($subcats as $subcat){
			array_push($subcatIDs, $subcat->id);
		}
		$files = Archivo::whereIn('subcat_id', $subcatIDs)->get();
		return $this->layout->content = View::make('documentacion', array('subcats'=>$subcats, 'files'=>$files));
	}
	public function feed(){
		if(Input::has('subcats')){
			$subcatIDs = explode(',', Input::get('subcats'));
			$files = Archivo::whereIn('subcat_id', $subcatIDs)->get();
			return Response::json($files);
		}
	}
	public function getIpad(){
		return $this->layout->content = View::make('ipad');
	}
	public function postIpad(){
		return $this->layout->content = View::make('ipad_response');
	}
	public function equipo(){
		return $this->layout->content = View::make('equipo');
	}
	public function faq(){
		return $this->layout->content = View::make('faq');
	}
	public function download($file){
		$filename = 'uploads/' . $file;
		$filedata = @file_get_contents($filename);

		// SUCCESS
		if ($filedata)
		{
		    // GET A NAME FOR THE FILE
		    $basename = basename($filename);

		    // THESE HEADERS ARE USED ON ALL BROWSERS
		    header("Content-Type: application-x/force-download");
		    header("Content-Disposition: attachment; filename=$basename");
		    header("Content-length: " . (string)(strlen($filedata)));
		    header("Expires: ".gmdate("D, d M Y H:i:s", mktime(date("H")+2, date("i"), date("s"), date("m"), date("d"), date("Y")))." GMT");
		    header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");

		    // THIS HEADER MUST BE OMITTED FOR IE 6+
		    if (FALSE === strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE '))
		    {
		        header("Cache-Control: no-cache, must-revalidate");
		    }

		    // THIS IS THE LAST HEADER
		    header("Pragma: no-cache");

		    // FLUSH THE HEADERS TO THE BROWSER
		    flush();

		    // CAPTURE THE FILE IN THE OUTPUT BUFFERS - WILL BE FLUSHED AT SCRIPT END
		    ob_start();
		    echo $filedata;
		}
	}
}