<?php

return array(
    'id' =>             'google:oauth2', # notrans
    'version' =>        '0.1',
    'name' =>           /* trans */ 'Oauth2 Authentication Google',
    'author' =>         'Pablo González',
    'description' =>    /* trans */ 'Provides a configurable authentication backend
        for authenticating staff and clients using an OAUTH2 from Google.',
    'url' =>            'https://github.com/senzil/osticket-google-oauth2-plugin',
    'plugin' =>         'authentication.php:OauthAuthPlugin',
    'requires' => array(
        "ohmy/auth" => array(
            "version" => "*",
            "map" => array(
                "ohmy/auth/src" => 'lib',
            )
        ),
    ),
);

?>
