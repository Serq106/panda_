<?php
	
	include_once "model/PostModel.php";
	include_once "view/VideoYouTubePostView.php";
	include_once "view/VideoYouTubeModalView.php";
	include_once "view/VideoVKPostView.php";
	include_once "view/VideoVKModalView.php";


    class VideoController extends Post
    {
	    public function users_get($access_token)
	    {
		    $result = users_get($this->getIdUser(), "photo_50", 5.52, $access_token);
		    if($result->response[0]->photo_50 == null)
			    $this->setUrlPhoto("https://vk.com//images/camera_200.png");
		    else
			    $this->setUrlPhoto($result->response[0]->photo_50);
		
		    $this->setName($result->response[0]->first_name . " " . $result->response[0]->last_name);
	    }
	
	    public function groups_getById($access_token)
	    {
		    $result = groups_getById($this->getIdUser(), 5.63, $access_token);
		
		    if($result->response[0]->photo_50 == null)
			    $this->setUrlPhoto("https://vk.com//images/camera_200.png");
		    else
			    $this->setUrlPhoto($result->response[0]->photo_50);
		
		    $this->setName($result->response[0]->name);
	    }
	    
        /* this is youtube video array*/
        public function GetYouTubeVideo($textSearch, $access_token_youtube)
        {
            $result = video_search_youtube("snippet", 5, $textSearch, "", $access_token_youtube);

            return $result;
        }

        /* this is VK video array*/
        public function GetVKVideo($textSearch, $access_token)
        {
            $result = video_search($textSearch, 5, 0, $access_token);

            return $result;
        }

        public function PrintVideo($YoutubeVideoArray, $VKVideoArray, $access_token)
        {
            $resultYoutube = $YoutubeVideoArray;
            $resultVK = $VKVideoArray;
            $_SESSION['nextPageToken'] = $resultYoutube->nextPageToken;
            echo  $_SESSION['nextPageToken'];
            for ($i = 0; $i < sizeof($resultYoutube->items); $i++) {

                $url_video = $resultYoutube->items[$i]->id->videoId;
                $publishedAt = $resultYoutube->items[$i]->snippet->publishedAt;
                $channelId = $resultYoutube->items[$i]->snippet->channelId;
                $title = $resultYoutube->items[$i]->snippet->title;
                $description = $resultYoutube->items[$i]->snippet->description;
                $channelTitle = $resultYoutube->items[$i]->snippet->channelTitle;

                $url_video = 'https://www.youtube.com/embed/' . $url_video;

                print (printYouTube($i, $url_video, $publishedAt, $channelId, $title, $description, $channelTitle));
                print (printYouTubeModal($i, $url_video, $publishedAt, $channelId, $title, $description, $channelTitle));


            }
            for ($i = 0; $i < sizeof($resultVK->response->items); $i++) {
                $this->setVideo($resultVK->response->items[$i]->player);
	            $this->setIdPost($resultVK->response->items[ $i ]->id);
	            $this->setIdUser($resultVK->response->items[ $i ]->owner_id);
	            $this->setUrlId("id" . $resultVK->response->items[ $i ]->owner_id);
	            $this->setText($resultVK->response->items[ $i ]->description);
	            $this->setDate(getdate($resultVK->response->items[ $i ]->date));
	            $this->setViews($resultVK->response->items[$i]->views);
	            $E = '_';
	
	            if ($this->getIdUser() > 0) {
		            $this->users_get($access_token);
	            } else {
		            $this->setUrlId("public" . abs($this->getIdUser()));
		            $this->groups_getById($access_token);
	            }

                print (printVKPost($i, $this->getName(),  $this->getDate(),  $this->getUrlPhoto(),  $this->getVideo(),  $this->getText(),  $this->getViews()));
                print (printVKModal($i, $this->getName(), $this->getDate(),  $this->getUrlPhoto(),  $this->getVideo(),  $this->getText(),  $this->getViews()));
            }

        }


    }

?>