<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class mobileplugin_arclight_no_phone_login extends base_plugin_phone_user_and_dog_forbidden {
	function common() {
		parent::closeforumindex('mobile');
	}
}

class base_plugin_phone_user_and_dog_forbidden {
	//TODO - Insert your code here
	static function closeforumindex($type = 'pc') {
		global $_G;
		$_config = $_G['cache']['plugin']['arclight_no_phone_login'];

		// 未开启，不执行
		if(!$_config['enableplugin']) {
			return false;
		}

		$basescript = $_G['basescript'];
		$curm = CURMODULE;

		if($_config["kickmode"] == "2"){
			dheader('location: plugin.php?id=arclight_no_phone_login:nophone&mobile=no');
		}else{
			dheader('location: ' . $_G['siteurl']."?mobile=no");
		}	
	}
}
		  	  		  	  		     	  	 			    		   		     		       	   	 		    		   		     		       	   	 		    		   		     		       	   				    		   		     		       	   		      		   		     		       	   	 	    		   		     		       	 	        		   		     		       	 	        		   		     		       	  				     		   		     		       	   		 	    		   		     		       	  			      		   		     		       	  	  		    		   		     		       	  	 		     		   		     		       	  		       		   		     		       	  	 			    		   		     		       	   	 		    		   		     		       	 	   	    		   		     		       	   		 	    		   		     		       	  	  	     		   		     		       	  		  	    		   		     		       	  				     		   		     		       	 	   	    		   		     		       	  			      		   		     		       	  	   	    		   		     		       	 	        		 	      	  		  	  		     	
?>