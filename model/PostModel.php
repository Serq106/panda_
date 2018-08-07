<?php
	
	class Post
	{
		private $id_post;
		
		private $id_user;
		
		private $id_photo;
		
		private $text;
		
		private $url_photo;
		
		private $name;
		
		private $urlId;
		
		private $name_group;
		
		private $like;
		
		private $reposts;
		
		private $views;
		
		private $date;
		
		private $video;
		
		public function getVideo()
		{
			return $this->video;
		}
		
		/**
		 * @param mixed $Diews
		 */
		public function setVideo($video)
		{
			$this->video = $video;
		}
		/**
		 * @return mixed
		 */
		
		public function getDate()
		{
			return $this->date;
		}
		
		/**
		 * @param mixed $Diews
		 */
		public function setDate($date)
		{
			$this->date = $date;
		}
		/**
		 * @return mixed
		 */
		
		public function getViews()
		{
			return $this->views;
		}
		
		/**
		 * @param mixed $views
		 */
		public function setViews($views)
		{
			$this->views = $views;
		}
		
		/**
		 * @return mixed
		 */
		
		public function getReposts()
		{
			return $this->reposts;
		}
		
		/**
		 * @param mixed $reposts
		 */
		public function setReposts($reposts)
		{
			$this->reposts = $reposts;
		}
		
		/**
		 * @return mixed
		 */
		
		public function getLike()
		{
			return $this->like;
		}
		
		/**
		 * @param mixed $like
		 */
		public function setLike($like)
		{
			$this->like = $like;
		}
		
		/**
		 * @return mixed
		 */
		
		public function getNameGroup()
		{
			return $this->name_group;
		}
		
		/**
		 * @param mixed $name_group
		 */
		public function setNameGroup($name_group)
		{
			$this->name_group = $name_group;
		}
		
		/**
		 * @return mixed
		 */
		public function getIdUser()
		{
			return $this->id_user;
		}
		
		/**
		 * @param mixed $id_user
		 */
		public function setIdUser($id_user)
		{
			$this->id_user = $id_user;
		}
		
		/**
		 * @return mixed
		 */
		public function getUrlId()
		{
			return $this->urlId;
		}
		
		/**
		 * @param mixed $urlId
		 */
		public function setUrlId($urlId)
		{
			$this->urlId = $urlId;
		}
		
		/**
		 * @return mixed
		 */
		public function getUrlPhoto()
		{
			return $this->url_photo;
		}
		
		/**
		 * @param mixed $url_photo
		 */
		public function setUrlPhoto($url_photo)
		{
			$this->url_photo = $url_photo;
		}
		
		/**
		 * @return mixed
		 */
		
		public function getName()
		{
			return $this->name;
		}
		
		/**
		 * @param mixed $name
		 */
		public function setName($name)
		{
			$this->name = $name;
		}
		
		/**
		 * @return mixed
		 */
		public function getIdPost()
		{
			return $this->id_post;
		}
		
		/**
		 * @param mixed $id_post
		 */
		public function setIdPost($id_post)
		{
			$this->id_post = $id_post;
		}
		
		/**
		 * @return mixed
		 */
		public function getIdPhoto()
		{
			return $this->id_photo;
		}
		
		/**
		 * @param mixed $id_photo
		 */
		public function setIdPhoto($id_photo)
		{
			$this->id_photo = $id_photo;
		}
		
		/**
		 * @return mixed
		 */
		public function getText()
		{
			return $this->text;
		}
		
		/**
		 * @param mixed $text
		 */
		public function setText($text)
		{
			$this->text = $text;
		}
	}

?>