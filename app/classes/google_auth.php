<?php
    class GoogleAuth{
        
        protected $client;
        public $user;
        
        public function __construct(Google_Client $googleClient = null)
        {
            $this->client = $googleClient;
            
            if($this->client)
            {
                $this->client->setClientID('Insert here ID Client');
                $this->client->setClientSecret('Insert here ID Secret');
                $this->client->setRedirectUri('Insert here URL Redirect');
                $this->client->addScope('email');
                $this->client->addScope('profile');
            }
        }
        
        public function isLoggedIn()
        {
            return isset($_SESSION['access_token']);
        }
        
        public function getAuthUrl()
        {
            return $this->client->createAuthUrl();
        }
        
        public function checkRedirectCode()
        {
            if(isset($_GET['code']))
            {
                $this->client->authenticate($_GET['code']);
                $this->setToken($this->client->getAccessToken());
				$this->setUser($this->getPayload());
                
                $payload = $this->getPayload();
                
                return true;
            }
            return false;
        }
        
        public function setToken($token)
        {
            $_SESSION['access_token'] = $token;
            $this->client->setAccessToken($token);
        }
		
		public function setUser($user)
		{
			$_SESSION['user'] = $user;
		}
		
		public function getUser()
        {
            return isset($_SESSION['user']);
        }
        
        public function Logout()
        {
            unset($_SESSION['access_token']);
        }
        
        public function getPayload()
        {
            $payload = $this->client->verifyIdToken();
            
            if($payload)
            {
                return $payload;
            }
        }
    }
?>