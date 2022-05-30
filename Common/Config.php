<?php
class Config
{

    const WEB_ROOT = "http://localhost:8888/shared_inbox";

    // Linkedin API configuration
    const Response_Type= 'code';

    const CLIENT_ID = '771vpv4qw08gkj';

    const CLIENT_SECRET = 'EkcgETrWBmsBJ9kw';

    const SCOPE = 'r_liteprofile%20r_emailaddress%20w_member_social';

    const CALLBACK_URL = Config::WEB_ROOT . '/Callback.php';

}
