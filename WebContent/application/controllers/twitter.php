<?php
//컨슈머키 
																			
class Twitter extends CI_Controller {
	public function login(){
		session_start();
		//request토큰 발급 
		// library 로드, 변수 설정 등
		require_once('twitterOAuth.php');//상대경로 안먹어서 같은 폴더로 복사
		$domain = 'http://' . $_SERVER['HTTP_HOST'] . '/';
		// TwitterOAuth object 생성
		global $consumer_key;
		global $consumer_secret;	
		$connection = new TwitterOAuth($consumer_key, $consumer_secret);
		// request token 발급
		$request_token = $connection->getRequestToken($domain . 'twitter');
		// 결과 확인
		switch ($connection->http_code) {
		    case 200:
		        // 성공, token 저장
		        $_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
		        $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
		        // 인증 url 확인
		        $url = $connection->getAuthorizeURL($token);
		        // 인증 url (로그인 url) 로 redirect
		        header('Location: ' . $url);
		        break;
		    default:
		        echo 'Could not connect to Twitter. Refresh the page or try again later.';
		        break;
		}// switch ($connection->http_code)
	}//end login and Request토큰 발급 후 세션저장
	
	public function getAccessToken(){//access토큰 발급
		session_start();
		// library 로드, 변수 설정 등
		require_once('twitterOAuth.php');//상대경로 안먹어서 같은 폴더로 복사
		// Request tokenr을 포함한 TwitterOAuth object 생성
		global $consumer_key;
		global $consumer_secret;
		$connection = new TwitterOAuth($consumer_key, $consumer_secret,$_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
		// access토큰 수령하여 세션에 저장. 인증상태를 상시유지할 경우 DB에 저장
		$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
		$_SESSION['twitter_access_token'] = $access_token['oauth_token'];
		$_SESSION['twitter_access_token_secret'] = $access_token['oauth_token_secret'];
	}//getAccessToken
	
	public function index(){
		$this->getAccessToken();
		global $consumer_key;
		global $consumer_secret;
		$connection=new TwitterOAuth($consumer_key, $consumer_secret, $_SESSION['twitter_access_token'],$_SESSION['twitter_access_token_secret']);
		$timeline=$connection->get('statuses/home_timeline');
		$this->load->view('head');
		$this->load->view('twitter_view',array('timeline'=>$timeline));
		$this->load->view('foot');
	}
}//end twitter
?>