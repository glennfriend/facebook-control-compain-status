<?php
namespace AppModule;

use Facebook\Facebook;
use Facebook\FacebookApp;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

use FacebookHelper;

/**
 *
 */
class Home extends Tool\BaseController
{

    /**
     *
     */
    protected function defaultPage()
    {
        if (!isset($_SESSION['fb_access_token']) || !$_SESSION['fb_access_token']) {
            return redirect('/login');
        }

        $fb = FacebookHelper::getFacebook();
        $fb->setDefaultAccessToken($_SESSION['fb_access_token']);

        $this->render('defaultPage', [
            'fb'            => $fb,
            'adAccountId'   => attrib('aId'),
            'adAccountName' => attrib('aName'),
            'campaignName'  => attrib('campaigns_selected'),
        ]);
    }

    /**
     *
     */
    protected function status()
    {
        $token = \ViewHelper::getToken();
        if (!$token) {
            throw new \Exception("Token file not found.");
        }

        $fb = FacebookHelper::getFacebook();
        $fb->setDefaultAccessToken($token);

        if (isCli()) {
            $type = getParam(0);
            var_dump($type);
            if ("1" !== $type && "0" !== $type) {
                throw new \Exception("type is error");
                exit;
            }
        }
        else {
            $type = getParam('type');
        }

        $this->render('status', [
            'fb'            => $fb,
            'type'          => $type
        ]);
    }

}
