<?php
	
	session_start();
	$text = $_SESSION['s_text'];
	$type = $_SESSION['s_type'];
	$access_token = $_SESSION['s_access_token'];
	$access_token_youtube = $_SESSION['s_access_token_youtube'];
	$startFrom = $_POST['startFrom'];
	$uid = $_COOKIE["uid"];

	include_once("method.php");
	include_once "model/PostModel.php";
	include_once ("controller/PostController.php");
	include_once ("controller/VideoController.php");
	include_once "view/VideoYouTubePostView.php";
	include_once "view/VideoYouTubeModalView.php";
	include_once "view/VideoVKPostView.php";
	include_once "view/VideoVKModalView.php";



	if (($text != '' && $type == "video")) {
        $resultVK =  video_search($text, 5, $startFrom,  $access_token);
        $nextPageToken = $_SESSION['nextPageToken'];
        $resultYoutube = video_search_youtube("snippet", 5, $text, $nextPageToken, $access_token_youtube);
        $_SESSION['nextPageToken'] = $resultYoutube->nextPageToken;

		$articles = array();
		for($i=0; $i< sizeof($resultVK->response->items); $i++)
		{
            $Video = ($resultVK->response->items[$i]->player);
            $IdPost = ($resultVK->response->items[ $i ]->id);
            $IdUser = ($resultVK->response->items[ $i ]->owner_id);
            $UrlId = ("id" . $resultVK->response->items[ $i ]->owner_id);
            $Text = ($resultVK->response->items[ $i ]->description);
            $Date = (getdate($resultVK->response->items[ $i ]->date));
            $Views = ($resultVK->response->items[$i]->views);
            $E = '_';

            if ($IdUser > 0) {
                $result = users_get($IdUser, "photo_50", 5.52, $access_token);
                if($result->response[0]->photo_50 == null)
                    $UrlPhoto = ("https://vk.com//images/camera_200.png");
                else
                    $UrlPhoto = ($result->response[0]->photo_50);

                $Name = ($result->response[0]->first_name . " " . $result->response[0]->last_name);
            } else {
                $UrlId = ("public" . abs($IdUser));
                $result = groups_getById($IdUser, 5.63, $access_token);

                if($result->response[0]->photo_50 == null)
                    $UrlPhoto = ("https://vk.com//images/camera_200.png");
                else
                    $UrlPhoto = ($result->response[0]->photo_50);

                $Name = ($result->response[0]->name);
            }
            $video = printVKPost($i, $Name,  $Date,  $UrlPhoto,  $Video,  $Text,  $Views).
            printVKModal($i, $Name,  $Date,  $UrlPhoto,  $Video,  $Text,  $Views);

            $articles[] =  array("video" ,$video);
		}

		$j = 0;

        for ($i = 5; $i < 10; $i++) {

            $url_video = $resultYoutube->items[$j]->id->videoId;
            $publishedAt = $resultYoutube->items[$j]->snippet->publishedAt;
            $channelId = $resultYoutube->items[$j]->snippet->channelId;
            $title = $resultYoutube->items[$j]->snippet->title;
            $description = $resultYoutube->items[$j]->snippet->description;
            $channelTitle = $resultYoutube->items[$j]->snippet->channelTitle;

            $url_video = 'https://www.youtube.com/embed/' . $url_video;

            $video = printYouTube($i, $url_video, $publishedAt, $channelId, $title, $description, $channelTitle).
            printYouTubeModal($i, $url_video, $publishedAt, $channelId, $title, $description, $channelTitle);
			$j++;
            $articles[] =  array("video" ,$video);
        }

		echo json_encode($articles);
		
	} else if (($text != '' && $type == "posts")) {
		$text = str_replace(" ", "%20", $text);
		$f = str_replace("#", "%23", $text);
		$u_info = newsfeed_search($f, 10, $startFrom, 5.12, $access_token);
		
		
		$articles = array();
		for ($i = 0; $i < 10; $i++) {
			$post = new PostController();
			$post->getPostVk($u_info, $access_token, $i);
			$post->getPhotoPost();
			if ($user_id > 0) {
				$post->users_get($access_token);
			} else {
				$id_group = abs($id_user);
				$post->groups_getById($access_token);
			}
			
			$articles[] = array("post", $post->getUrlPhoto(), $post->getName(), $post->getIdPhoto(),$post->getText(), $uid, $startFrom + $i, $post->getPhotoPost());
			
		}
		echo json_encode($articles);
	} else if ((/*$text !='' && */
		$type == "human")) {
		$last_name = $_SESSION['s_last_name'];
		$first_name = $_SESSION['s_first_name'];
		if ($last_name != null && $first_name != null) {
			$q = $last_name . '%20' . $first_name;
		} else if ($last_name != null && $first_name == null) {
			$q = $last_name;
		} else if ($last_name == null && $first_name != null) {
			$q = $first_name;
		}
		$result = users_search($q, 392, 5.63, $access_token, $startFrom);
		
		
		$articles = array();
		for ($i = 0; $i < 10; $i++) {
			$id_user = $result->response->items[ $i ]->id;
			$url_photo = $result->response->items[ $i ]->photo_200;
			$first_name = $result->response->items[ $i ]->first_name;
			$last_name = $result->response->items[ $i ]->last_name;
			$articles[] = array("human", $id_user, $url_photo, $first_name, $last_name);
			
		}
		echo json_encode($articles);
	} else if (($text != '' && $type == "videoY")) {
		$nextPageToken = $_SESSION['nextPageToken'];
		$result = video_search_youtube("snippet", 2, $text, $nextPageToken, $access_token_youtube);
		$_SESSION['nextPageToken'] = $result->nextPageToken;
		$e = $result->nextPageToken;
		$articles = array();
		for ($i = 0; $i < 2; $i++) {
			$url_video = $result->items[ $i ]->id->videoId;
			$url_video = 'https://www.youtube.com/embed/' . $url_video;
			$articles[] = array("videoY", $url_video, $uid);
		}
		echo json_encode($articles);
	}
?>
