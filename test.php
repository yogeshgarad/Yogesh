<?php

//     function getPoints() {
//         $url = "https://india5.adscendmedia.com/adwall/api/publisher/24235/profile/9/user/faunas/transactions.json";
//         $ch = curl_init($url);
//         $options = array(
//             CURLOPT_RETURNTRANSFER => true, // return web page
//             CURLOPT_HEADER => false, // don't return headers
//             CURLOPT_FOLLOWLOCATION => false, // follow redirects
//             CURLOPT_ENCODING => "utf-8", // handle all encodings
//             CURLOPT_AUTOREFERER => true, // set referer on redirect
//             CURLOPT_CONNECTTIMEOUT => 20, // timeout on connect
//             CURLOPT_TIMEOUT => 20, // timeout on response
//             CURLOPT_HTTPGET => 1, // i am getting get data
//             CURLOPT_SSL_VERIFYHOST => 0, // don't verify ssl
//             CURLOPT_SSL_VERIFYPEER => false, //
//             CURLOPT_VERBOSE => 1,
//         );
//         curl_setopt_array($ch, $options);
//         $response = curl_exec($ch);
//         curl_close($ch);
//         $response = json_decode($response, true);
//         $return = 0;
//         if (isset($response['currency_count'])) {
//             $return = $response['currency_count'];
//         }
//         $_SESSION['points'] = $return;
//         return $return;
//     }

// echo $points = getPoints();



// ==============================================


function createTransaction() {
        $user_id = 'faunas';
        $reward_amount = 2000;
        $api_key = '$2y$10$Xa9H.eCQxmXrwu8WaKS0L.nMDr0W90ou0WY/1uFHmxP7/BIhIfuaG';
        //$api_key = 'sY3C0wjWCxseKx8nCTRLrUr2tw96YXf6jz5wFspxBYJED2qkf2zydc9CiNhb';
        $description = 'bentofox redeemed';
        $params = '?api_key=' . $api_key . '&currency_adjustment=' . $reward_amount . '&description=' . $description;
        $url = "https://adscendmedia.com/adwall/api/publisher/24235/profile/9/user/faunas/transactions.json". $params;
        $ch = curl_init($url);
        $post_data = [24235, 9, $user_id];
        $options = array(
            CURLOPT_RETURNTRANSFER => true, // return web page
            CURLOPT_HEADER => false, // don't return headers
            CURLOPT_FOLLOWLOCATION => false, // follow redirects
            CURLOPT_ENCODING => "utf-8", // handle all encodings
            CURLOPT_AUTOREFERER => true, // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 20, // timeout on connect
            CURLOPT_TIMEOUT => 20, // timeout on response
            CURLOPT_POST => 1, // i am sending post data
            CURLOPT_POSTFIELDS => $post_data, // this are my post vars
            CURLOPT_SSL_VERIFYHOST => 0, // don't verify ssl
            CURLOPT_SSL_VERIFYPEER => false, //
            CURLOPT_VERBOSE => 1,
        );

        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

$trans = createTransaction();
print_r($trans);