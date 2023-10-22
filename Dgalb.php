<?php
// Marrja e session_id nga kërkesa POST e mëparshme
$session_id = "a3897a89932b441ea2d46e3444e0a973";

// URL dhe headers të dhënat për kërkesën POST
$post_url = "https://prd-digitalb.spectar.tv/client_api.php/user/login/session_id/$session_id/language/sq/format/json";
$post_headers = array(
    "Accept: application/json, text/plain, */*",
    "Accept-Encoding: gzip, deflate",
    "Accept-Language: en-US,en;q=0.9",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Type: application/json",
    "Cookie: spectar_frontend=2iqld53l233mha747e3iabqbk3; spectar_frontend_data=your_cookie_data_here",
    "Host: prd-digitalb.spectar.tv",
    "Origin: https://prd-digitalb.spectar.tv",
    "Pragma: no-cache",
    "Referer: https://prd-digitalb.spectar.tv/onboarding/login",
    "Sec-Fetch-Dest: empty",
    "Sec-Fetch-Mode: cors",
    "Sec-Fetch-Site: same-origin",
    "User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; SM-G955N Build/N2G48H; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/92.0.4515.131 Mobile Safari/537.36",
    "X-Requested-With: com.morescreens.digitalb"
);

$post_data = array(
    "username" => "gencishembitrasi@gmail.com",
    "password" => "Bvtt242!:"
);

// Krijo një resurs të kërkesës POST
$post_ch = curl_init($post_url);

// Konfiguro headers dhe body të kërkesës POST
curl_setopt($post_ch, CURLOPT_POST, true);
curl_setopt($post_ch, CURLOPT_HTTPHEADER, $post_headers);
curl_setopt($post_ch, CURLOPT_POSTFIELDS, json_encode($post_data));
curl_setopt($post_ch, CURLOPT_RETURNTRANSFER, true);

// Ekzekuto kërkesën POST dhe merr përgjigjen
$post_response = curl_exec($post_ch);

// Kontrollo për gabime gjatë kërkesës POST
if (curl_errno($post_ch)) {
    echo "Gabim gjatë dërgimit të kërkesës POST: " . curl_error($post_ch);
} else {
    $http_status = curl_getinfo($post_ch, CURLINFO_HTTP_CODE);

    if ($http_status == 200) {
        echo "Kërkesa POST u dërgua me sukses!";
        echo "Përgjigja POST:";

        // Dekodo përgjigjen nga JSON në asociativ array
        $post_data = json_decode($post_response, true);

        // Shfaq vlerat e dëshiruara
        echo "Secure Streaming Token: " . $post_data['secure_streaming_token'] . "<br>";
        echo "Session Token: " . $post_data['session_token'] . "<br>";
        echo "Session ID: " . $session_id;
    } else {
        echo "Gabim gjatë dërgimit të kërkesës POST. Status Code: " . $http_status;
        echo "Përgjigja POST:";
        echo $post_response;  // Përgjigja e gabuar mund të përmbajë informacion shtesë mbi gabimin
    }
}
$id = isset($_GET['id']) ? intval($_GET['id']) : null; 
 
$Topchannel = "https://digitalb-live.morescreens.com/DAL_1_053/cenc_manifest.mpd?id=DAL_1_053&video_id=12926&token="; 
$FirstChannel = "https://digitalb-live.morescreens.com/DAL_1_042/cenc_manifest.mpd?id=DAL_1_042&video_id=32361&token="; 
$Topnews = "https://digitalb-live.morescreens.com/DAL_1_109/cenc_manifest.mpd?id=DAL_1_109&video_id=12488&token="; 
$THD = "https://digitalb-live.morescreens.com/DAL_1_054/cenc_manifest.mpd?id=DAL_1_054&video_id=12930&token="; 
$Rtsh = "https://digitalb-live.morescreens.com/DAL_1_036/cenc_manifest.mpd?id=DAL_1_036&video_id=8584&token=";
$Stinet = "https://digitalb-live.morescreens.com/DAL_1_002/cenc_manifest.mpd?id=DAL_1_002&video_id=7489&token=";
$MyMusic = "https://digitalb-live.morescreens.com/DAL_1_003/cenc_manifest.mpd?id=DAL_1_003&video_id=12495&token=";
$KlanKosova = "https://digitalb-live.morescreens.com/DAL_1_096/cenc_manifest.mpd?id=DAL_1_096&video_id=89227&token=";
$BangBang = "https://digitalb-live.morescreens.com/DAL_1_004/cenc_manifest.mpd?id=DAL_1_004&video_id=16377&token=";
$CufoTV = "https://digitalb-live.morescreens.com/DAL_1_005/cenc_manifest.mpd?id=DAL_1_005&video_id=12498&token=";
$JuniorTV = "https://digitalb-live.morescreens.com/DAL_1_006/cenc_manifest.mpd?id=DAL_1_006&video_id=7510&token=";
$BabyTV = "https://digitalb-live.morescreens.com/DAL_1_007/cenc_manifest.mpd?id=DAL_1_007&video_id=7612&token=";
$Nicktoons = "https://digitalb-live.morescreens.com/DAL_1_008/cenc_manifest.mpd?id=DAL_1_008&video_id=7618&token=";
$Nickelodeon = "https://digitalb-live.morescreens.com/DAL_1_009/cenc_manifest.mpd?id=DAL_1_009&video_id=17413&token=";
$PremiumChannel = "https://digitalb-live.morescreens.com/DAL_1_052/cenc_manifest.mpd?id=DAL_1_052&video_id=9325&token=";
$Goldhd = "https://digitalb-live.morescreens.com/DAL_1_055/cenc_manifest.mpd?id=DAL_1_055&video_id=12931&token=";
$Maxhd = "https://digitalb-live.morescreens.com/DAL_1_056/cenc_manifest.mpd?id=DAL_1_056&video_id=12934&token=";
$Familyhd = "https://digitalb-live.morescreens.com/DAL_1_057/cenc_manifest.mpd?id=DAL_1_057&video_id=9328&token=";
$Eurofilm = "https://digitalb-live.morescreens.com/DAL_1_010/cenc_manifest.mpd?id=DAL_1_010&video_id=7825&token=";
$Filmautor = "https://digitalb-live.morescreens.com/DAL_1_011/cenc_manifest.mpd?id=DAL_1_011&video_id=8088&token=";
$Filmhits = "https://digitalb-live.morescreens.com/DAL_1_058/cenc_manifest.mpd?id=DAL_1_058&video_id=9414&token=";
$Filmthriller = "https://digitalb-live.morescreens.com/DAL_1_012/cenc_manifest.mpd?id=DAL_1_012&video_id=8149&token=";
$Filmdrama = "https://digitalb-live.morescreens.com/DAL_1_013/cenc_manifest.mpd?id=DAL_1_013&video_id=8151&token=";
$Filmaksionhd = "https://digitalb-live.morescreens.com/DAL_1_059/cenc_manifest.mpd?id=DAL_1_059&video_id=13211&token=";
$Filmkomedi = "https://digitalb-live.morescreens.com/DAL_1_014/cenc_manifest.mpd?id=DAL_1_014&video_id=8218&token=";
$Foxmovies = "https://digitalb-live.morescreens.com/DAL_1_015/cenc_manifest.mpd?id=DAL_1_015&video_id=8220&token=";
$Fox = "https://digitalb-live.morescreens.com/DAL_1_016/cenc_manifest.mpd?id=DAL_1_016&video_id=8223&token=";
$Foxlife = "https://digitalb-live.morescreens.com/DAL_1_017/cenc_manifest.mpd?id=DAL_1_017&video_id=8425&token=";
$Serialeturkehd = "https://digitalb-live.morescreens.com/DAL_1_078/cenc_manifest.mpd?id=DAL_1_078&video_id=11361&token=";
$Filmboxpremiumhd = "https://digitalb-live.morescreens.com/DAL_1_079/cenc_manifest.mpd?id=DAL_1_079&video_id=11362&token=";
$Klanmusic = "https://digitalb-live.morescreens.com/DAL_1_018/cenc_manifest.mpd?id=DAL_1_018&video_id=32196&token=";
$Klannews = "https://digitalb-live.morescreens.com/DAL_1_019/cenc_manifest.mpd?id=DAL_1_019&video_id=32229&token=";
$Klanmacedonia = "https://digitalb-live.morescreens.com/DAL_1_020/cenc_manifest.mpd?id=DAL_1_020&video_id=8437&token=";
$Klanplus = "https://digitalb-live.morescreens.com/DAL_1_021/cenc_manifest.mpd?id=DAL_1_021&video_id=8440&token=";
$klantvhd = "https://digitalb-live.morescreens.com/DAL_1_060/cenc_manifest.mpd?id=DAL_1_060&video_id=13261&token=";
$Klantvhdplus6 = "https://digitalb-live.morescreens.com/DAL_2_060/cenc_manifest.mpd?id=DAL_2_060&video_id=184058&token=";
$Abcnews = "https://digitalb-live.morescreens.com/DAL_1_064/cenc_manifest.mpd?id=DAL_1_064&video_id=13264&token=";
$Oranews = "https://digitalb-live.morescreens.com/DAL_1_063/cenc_manifest.mpd?id=DAL_1_063&video_id=12676&token=";
$Rtvorahd = "https://digitalb-live.morescreens.com/DAL_1_022/cenc_manifest.mpd?id=DAL_1_022&video_id=11184&token=";
$A2cnnhd = "https://digitalb-live.morescreens.com/DAL_1_062/cenc_manifest.mpd?id=DAL_1_062&video_id=11183&token=";
$News24 = "https://digitalb-live.morescreens.com/DAL_1_023/cenc_manifest.mpd?id=DAL_1_023&video_id=12690&token=";
$Faxnews = "https://digitalb-live.morescreens.com/DAL_1_024/cenc_manifest.mpd?id=DAL_1_024&video_id=8446&token=";
$Scantv = "https://digitalb-live.morescreens.com/DAL_1_026/cenc_manifest.mpd?id=DAL_1_026&video_id=8451&token=";
$Reporttv = "https://digitalb-live.morescreens.com/DAL_1_027/cenc_manifest.mpd?id=DAL_1_027&video_id=12694&token=";
$Euronewsalbania = "https://digitalb-live.morescreens.com/DAL_1_061/cenc_manifest.mpd?id=DAL_1_061&video_id=11181&token=";
$Syritv = "https://digitalb-live.morescreens.com/DAL_1_030/cenc_manifest.mpd?id=DAL_1_030&video_id=8545&token=";
$Rtv21hd = "https://digitalb-live.morescreens.com/DAL_1_088/cenc_manifest.mpd?id=DAL_1_088&video_id=12004&token=";
$Ktv = "https://digitalb-live.morescreens.com/DAL_1_089/cenc_manifest.mpd?id=DAL_1_089&video_id=12196&token=";
$T7 = "https://digitalb-live.morescreens.com/DAL_1_090/cenc_manifest.mpd?id=DAL_1_090&video_id=12361&token=";
$Zicotv = "https://digitalb-live.morescreens.com/DAL_1_041/cenc_manifest.mpd?id=DAL_1_041&video_id=32316&token=";
$Rtk1 = "https://digitalb-live.morescreens.com/DAL_1_040/cenc_manifest.mpd?id=DAL_1_040&video_id=8664&token=";
$Atv = "https://digitalb-live.morescreens.com/DAL_1_110/cenc_manifest.mpd?id=DAL_1_110&video_id=12363&token=";
$Dukagjini = "https://digitalb-live.morescreens.com/DAL_1_099/cenc_manifest.mpd?id=DAL_1_099&video_id=89260&token=";
$Kanal10 = "https://digitalb-live.morescreens.com/DAL_1_098/cenc_manifest.mpd?id=DAL_1_098&video_id=89253&token=";
$Rtv21m = "https://digitalb-live.morescreens.com/DAL_1_043/cenc_manifest.mpd?id=DAL_1_043&video_id=32373&token=";
$Alsatm = "https://digitalb-live.morescreens.com/DAL_1_097/cenc_manifest.mpd?id=DAL_1_097&video_id=89251&token=";
$Starplustv = "https://digitalb-live.morescreens.com/DAL_1_032/cenc_manifest.mpd?id=DAL_1_032&video_id=8563&token=";
$Rtsh1 = "https://digitalb-live.morescreens.com/DAL_1_037/cenc_manifest.mpd?id=DAL_1_037&video_id=8587&token=";
$Rtshshkolle = "https://digitalb-live.morescreens.com/DAL_1_038/cenc_manifest.mpd?id=DAL_1_038&video_id=8638&token=";
$Zjarrtv = "https://digitalb-live.morescreens.com/DAL_1_031/cenc_manifest.mpd?id=DAL_1_031&video_id=8560&token=";
$Panoramatv = "https://digitalb-live.morescreens.com/DAL_1_102/cenc_manifest.mpd?id=DAL_1_102&video_id=378181&token=";
$Expshkence = "https://digitalb-live.morescreens.com/DAL_1_033/cenc_manifest.mpd?id=DAL_1_033&video_id=12841&token=";
$Exphistori = "https://digitalb-live.morescreens.com/DAL_1_034/cenc_manifest.mpd?id=DAL_1_034&video_id=12842&token=";
$Expnatyra = "https://digitalb-live.morescreens.com/DAL_1_035/cenc_manifest.mpd?id=DAL_1_035&video_id=12844&token=";
$Natgeohd = "https://digitalb-live.morescreens.com/DAL_1_086/cenc_manifest.mpd?id=DAL_1_086&video_id=11999&token=";
$Travelchannelhd = "https://digitalb-live.morescreens.com/DAL_1_072/cenc_manifest.mpd?id=DAL_1_072&video_id=11194&token=";
$kitchen24 = "https://digitalb-live.morescreens.com/DAL_1_044/cenc_manifest.mpd?id=DAL_1_044&video_id=8701&token=";
$AnimalPlanethd = "https://digitalb-live.morescreens.com/DAL_1_073/cenc_manifest.mpd?id=DAL_1_073&video_id=11196&token=";
$Discoverychannel = "https://digitalb-live.morescreens.com/DAL_1_046/cenc_manifest.mpd?id=DAL_1_046&video_id=8910&token=";
$Idextrahd = "https://digitalb-live.morescreens.com/DAL_1_083/cenc_manifest.mpd?id=DAL_1_083&video_id=11774&token=";
$Tlc = "https://digitalb-live.morescreens.com/DAL_1_045/cenc_manifest.mpd?id=DAL_1_045&video_id=8908&token=";
$Discoverysciencehd = "https://digitalb-live.morescreens.com/DAL_1_074/cenc_manifest.mpd?id=DAL_1_074&video_id=11356&token=";
$Discoveryturboxtra = "https://digitalb-live.morescreens.com/DAL_1_047/cenc_manifest.mpd?id=DAL_1_047&video_id=8997&token=";
$Docuboxhd = "https://digitalb-live.morescreens.com/DAL_1_080/cenc_manifest.mpd?id=DAL_1_080&video_id=11755&token=";
$Fastfunboxhd = "https://digitalb-live.morescreens.com/DAL_1_081/cenc_manifest.mpd?id=DAL_1_081&video_id=11769&token=";
$Fightboxhd = "https://digitalb-live.morescreens.com/DAL_1_082/cenc_manifest.mpd?id=DAL_1_082&video_id=11771&token=";
$ss1hd = "https://digitalb-live.morescreens.com/DAL_1_065/cenc_manifest.mpd?id=DAL_1_065&video_id=759825&token=";
$ss2hd = "https://digitalb-live.morescreens.com/DAL_1_066/cenc_manifest.mpd?id=DAL_1_066&video_id=758172&token=";
$ss3hd = "https://digitalb-live.morescreens.com/DAL_1_067/cenc_manifest.mpd?id=DAL_1_067&video_id=759827&token=";
$ss4hd = "https://digitalb-live.morescreens.com/DAL_1_068/cenc_manifest.mpd?id=DAL_1_068&video_id=759876&token=";
$ss5hd = "https://digitalb-live.morescreens.com/DAL_1_069/cenc_manifest.mpd?id=DAL_1_069&video_id=759882&token=";
$ss6hd = "https://digitalb-live.morescreens.com/DAL_1_070/cenc_manifest.mpd?id=DAL_1_070&video_id=759884&token=";
$ss7hd = "https://digitalb-live.morescreens.com/DAL_1_071/cenc_manifest.mpd?id=DAL_1_071&video_id=759886&token=";
$Eurosport1hd = "https://digitalb-live.morescreens.com/DAL_1_084/cenc_manifest.mpd?id=DAL_1_084&video_id=11775&token=";
$Eurosport2hd = "https://digitalb-live.morescreens.com/DAL_1_085/cenc_manifest.mpd?id=DAL_1_085&video_id=11997&token=";
$Rtshsport = "https://digitalb-live.morescreens.com/DAL_1_039/cenc_manifest.mpd?id=DAL_1_039&video_id=8650&token=";
$Mtvlivehd = "https://digitalb-live.morescreens.com/DAL_1_075/cenc_manifest.mpd?id=DAL_1_075&video_id=13594&token=";
$Melodytv = "https://digitalb-live.morescreens.com/DAL_1_048/cenc_manifest.mpd?id=DAL_1_048&video_id=9181&token=";
$Supersonictv = "https://digitalb-live.morescreens.com/DAL_1_049/cenc_manifest.mpd?id=DAL_1_049&video_id=9280&token=";
$Stvfolk = "https://digitalb-live.morescreens.com/DAL_1_050/cenc_manifest.mpd?id=DAL_1_050&video_id=9295&token=";
$Rai1 = "https://digitalb-live.morescreens.com/DAL_1_092/cenc_manifest.mpd?id=DAL_1_092&video_id=81287&token=";
$Rai2 = "https://digitalb-live.morescreens.com/DAL_1_093/cenc_manifest.mpd?id=DAL_1_093&video_id=81298&token=";
$Canal5 = "https://digitalb-live.morescreens.com/DAL_1_094/cenc_manifest.mpd?id=DAL_1_094&video_id=81299&token=";
$Italia1 = "https://digitalb-live.morescreens.com/DAL_1_095/cenc_manifest.mpd?id=DAL_1_095&video_id=81302&token=";

$rProfilID = "&authority_instance_id=spectar-prd-digitalb"; 
$rToken = $post_data['secure_streaming_token'];
$rKey = "&decryption_key=e9c4370095004713baaff297322d9529:50372100d7a90ddc4766920450ea3bdb";
 
if ($id === 1053) { 
    $redirect_url = $Topchannel . $rToken . $rProfilID; 
} else if ($id === 1042) { 
    $redirect_url = $FirstChannel . $rToken . $rProfilID; 
} else if ($id === 10109) { 
    $redirect_url = $Topnews . $rToken . $rProfilID; 
} else if ($id === 1054) { 
    $redirect_url = $THD . $rToken . $rProfilID; 
} else if ($id === 1036) { 
    $redirect_url = $Rtsh . $rToken . $rProfilID; 
} else if ($id === 1002) { 
    $redirect_url = $Stinet . $rToken . $rProfilID; 
} else if ($id === 1003) { 
    $redirect_url = $MyMusic . $rToken . $rProfilID; 
} else if ($id === 1096) { 
    $redirect_url = $KlanKosova . $rToken . $rProfilID; 
} else if ($id === 1004) { 
    $redirect_url = $BangBang . $rToken . $rProfilID; 
} else if ($id === 1005) { 
    $redirect_url = $CufoTV . $rToken . $rProfilID; 
} else if ($id === 1006) { 
    $redirect_url = $JuniorTV . $rToken . $rProfilID; 
} else if ($id === 1007) { 
    $redirect_url = $BabyTV . $rToken . $rProfilID; 
} else if ($id === 1008) { 
    $redirect_url = $Nicktoons . $rToken . $rProfilID; 
} else if ($id === 1009) { 
    $redirect_url = $Nickelodeon . $rToken . $rProfilID; 
} else if ($id === 1052) { 
    $redirect_url = $PremiumChannel . $rToken . $rProfilID; 
} else if ($id === 1055) { 
    $redirect_url = $Goldhd . $rToken . $rProfilID; 
} else if ($id === 1056) { 
    $redirect_url = $Maxhd . $rToken . $rProfilID; 
} else if ($id === 1057) { 
    $redirect_url = $Familyhd . $rToken . $rProfilID; 
} else if ($id === 1010) { 
    $redirect_url = $Eurofilm . $rToken . $rProfilID; 
} else if ($id === 1011) { 
    $redirect_url = $Filmautor . $rToken . $rProfilID; 
} else if ($id === 1058) { 
    $redirect_url = $Filmhits . $rToken . $rProfilID; 
} else if ($id === 1012) { 
    $redirect_url = $Filmthriller . $rToken . $rProfilID; 
} else if ($id === 1013) { 
    $redirect_url = $Filmdrama . $rToken . $rProfilID; 
} else if ($id === 1059) { 
    $redirect_url = $Filmaksionhd . $rToken . $rProfilID; 
} else if ($id === 1014) { 
    $redirect_url = $Filmkomedi . $rToken . $rProfilID; 
} else if ($id === 1015) { 
    $redirect_url = $Foxmovies . $rToken . $rProfilID; 
} else if ($id === 1016) { 
    $redirect_url = $Fox . $rToken . $rProfilID; 
} else if ($id === 1017) { 
    $redirect_url = $Foxlife . $rToken . $rProfilID; 
} else if ($id === 1078) { 
    $redirect_url = $Serialeturkehd . $rToken . $rProfilID; 
} else if ($id === 1079) { 
    $redirect_url = $Filmboxpremiumhd . $rToken . $rProfilID; 
} else if ($id === 1018) { 
    $redirect_url = $Klanmusic . $rToken . $rProfilID; 
} else if ($id === 1019) { 
    $redirect_url = $Klannews . $rToken . $rProfilID; 
} else if ($id === 1020) { 
    $redirect_url = $Klanmacedonia . $rToken . $rProfilID; 
} else if ($id === 1021) { 
    $redirect_url = $Klanplus . $rToken . $rProfilID; 
} else if ($id === 1060) { 
    $redirect_url = $klantvhd . $rToken . $rProfilID; 
} else if ($id === 10666) { 
    $redirect_url = $Klantvhdplus6 . $rToken . $rProfilID; 
} else if ($id === 1064) { 
    $redirect_url = $Abcnews . $rToken . $rProfilID; 
} else if ($id === 1063) { 
    $redirect_url = $Oranews . $rToken . $rProfilID; 
} else if ($id === 1022) { 
    $redirect_url = $Rtvorahd . $rToken . $rProfilID; 
} else if ($id === 1062) { 
    $redirect_url = $A2cnnhd . $rToken . $rProfilID; 
} else if ($id === 1023) { 
    $redirect_url = $News24 . $rToken . $rProfilID; 
} else if ($id === 1024) { 
    $redirect_url = $Faxnews . $rToken . $rProfilID; 
} else if ($id === 1026) { 
    $redirect_url = $Scantv . $rToken . $rProfilID; 
} else if ($id === 1027) { 
    $redirect_url = $Reporttv . $rToken . $rProfilID; 
} else if ($id === 1061) { 
    $redirect_url = $Euronewsalbania . $rToken . $rProfilID; 
} else if ($id === 1030) { 
    $redirect_url = $Syritv . $rToken . $rProfilID; 
} else if ($id === 1088) { 
    $redirect_url = $Rtv21hd . $rToken . $rProfilID; 
} else if ($id === 1089) { 
    $redirect_url = $Ktv . $rToken . $rProfilID; 
} else if ($id === 1090) { 
    $redirect_url = $T7 . $rToken . $rProfilID; 
} else if ($id === 1041) { 
    $redirect_url = $Zicotv . $rToken . $rProfilID; 
} else if ($id === 1040) { 
    $redirect_url = $Rtk1 . $rToken . $rProfilID; 
} else if ($id === 1110) { 
    $redirect_url = $Atv . $rToken . $rProfilID; 
} else if ($id === 1099) { 
    $redirect_url = $Dukagjini . $rToken . $rProfilID; 
} else if ($id === 1098) { 
    $redirect_url = $Kanal10 . $rToken . $rProfilID; 
} else if ($id === 1043) { 
    $redirect_url = $Rtv21m . $rToken . $rProfilID; 
} else if ($id === 1097) { 
    $redirect_url = $Alsatm . $rToken . $rProfilID; 
} else if ($id === 1032) { 
    $redirect_url = $Starplustv . $rToken . $rProfilID; 
} else if ($id === 1037) { 
    $redirect_url = $Rtsh1 . $rToken . $rProfilID; 
} else if ($id === 1038) { 
    $redirect_url = $Rtshshkolle . $rToken . $rProfilID; 
} else if ($id === 1031) { 
    $redirect_url = $Zjarrtv . $rToken . $rProfilID; 
} else if ($id === 10102) { 
    $redirect_url = $Panoramatv . $rToken . $rProfilID; 
} else if ($id === 1033) { 
    $redirect_url = $Expshkence . $rToken . $rProfilID; 
} else if ($id === 1034) { 
    $redirect_url = $Exphistori . $rToken . $rProfilID; 
} else if ($id === 1035) { 
    $redirect_url = $Expnatyra . $rToken . $rProfilID; 
} else if ($id === 1086) { 
    $redirect_url = $Natgeohd . $rToken . $rProfilID; 
} else if ($id === 1072) { 
    $redirect_url = $Travelchannelhd . $rToken . $rProfilID; 
} else if ($id === 1044) { 
    $redirect_url = $kitchen24 . $rToken . $rProfilID; 
} else if ($id === 1073) { 
    $redirect_url = $AnimalPlanethd . $rToken . $rProfilID; 
} else if ($id === 1046) { 
    $redirect_url = $Discoverychannel . $rToken . $rProfilID; 
} else if ($id === 1083) { 
    $redirect_url = $Idextrahd . $rToken . $rProfilID; 
} else if ($id === 1045) { 
    $redirect_url = $Tlc . $rToken . $rProfilID; 
} else if ($id === 1074) { 
    $redirect_url = $Discoverysciencehd . $rToken . $rProfilID; 
} else if ($id === 1047) { 
    $redirect_url = $Discoveryturboxtra . $rToken . $rProfilID; 
} else if ($id === 1080) { 
    $redirect_url = $Docuboxhd . $rToken . $rProfilID; 
} else if ($id === 1081) { 
    $redirect_url = $Fastfunboxhd . $rToken . $rProfilID; 
} else if ($id === 1082) { 
    $redirect_url = $Fightboxhd . $rToken . $rProfilID; 
} else if ($id === 1065) { 
    $redirect_url = $ss1hd . $rToken . $rProfilID; 
} else if ($id === 1066) { 
    $redirect_url = $ss2hd . $rToken . $rProfilID; 
} else if ($id === 1067) { 
    $redirect_url = $ss3hd . $rToken . $rProfilID; 
} else if ($id === 1068) { 
    $redirect_url = $ss4hd . $rToken . $rProfilID; 
} else if ($id === 1069) { 
    $redirect_url = $ss5hd . $rToken . $rProfilID; 
} else if ($id === 1070) { 
    $redirect_url = $ss6hd . $rToken . $rProfilID; 
} else if ($id === 1071) { 
    $redirect_url = $ss7hd . $rToken . $rProfilID; 
} else if ($id === 1084) { 
    $redirect_url = $Eurosport1hd . $rToken . $rProfilID; 
} else if ($id === 1085) { 
    $redirect_url = $Eurosport2hd . $rToken . $rProfilID; 
} else if ($id === 1039) { 
    $redirect_url = $Rtshsport . $rToken . $rProfilID; 
} else if ($id === 1075) { 
    $redirect_url = $Mtvlivehd . $rToken . $rProfilID; 
} else if ($id === 1048) { 
    $redirect_url = $Melodytv . $rToken . $rProfilID; 
} else if ($id === 1049) { 
    $redirect_url = $Supersonictv . $rToken . $rProfilID; 
} else if ($id === 1050) { 
    $redirect_url = $Stvfolk . $rToken . $rProfilID; 
} else if ($id === 1092) { 
    $redirect_url = $Rai1 . $rToken . $rProfilID; 
} else if ($id === 1093) { 
    $redirect_url = $Rai2 . $rToken . $rProfilID; 
} else if ($id === 1094) { 
    $redirect_url = $Canal5 . $rToken . $rProfilID; 
} else if ($id === 1095) { 
    $redirect_url = $Italia1 . $rToken . $rProfilID; 
} else { 
    // Handle other cases if needed 
} 
 
if (isset($redirect_url)) { 
    header('Location: ' . $redirect_url); 
    exit; 
} 
 
// Mbyll resursin e kërkesës POST 
curl_close($post_ch); 
?>
