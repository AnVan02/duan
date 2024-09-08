<?php 
	//load file model
	include "models/FeedbacksModel.php";
	class FeedbacksController extends Controller{
		use FeedbacksModel;
		//createPost
		public function createFeedbacks(){
			$this->modelCreateFeedback();
			$_SESSION['message']="Chúng tôi xin cảm ơn những lời góp ý từ của bạn và chúng tôi sẽ trà lời cho bạn sớm nhất ";
			header('location:index.php');
		}
	}
 ?>