define(['backbone'],function(Backbone){
		var nowView=null;

		var router = Backbone.Router.extend({
		   // Hash maps for routes
		   routes : {
		      "" 			: "index",
		      "seckill" 	: "seckill",
			  "express" 	: "express",
			  "black" 		: "black",
			  "payment/:action" 	: "payment",
			  "paydetails/:action"  : "paydetails",
			  "rechange" 	: "rechange",
			  "userData/:action" 	: "userData",
			  "thread"		: "thread",
			  "message/:action"		: "message",
			  "userjob"		: "userjob",
			  "specialty"	: "specialty",
			  "ensure"		: "ensure",
			  "complain"	: "complain",
			  "vip"			: "vip",
			  "topup/:action"		: "topup",
			  "autoam"		: "autoam",
			  "test" 		: "test",
		      "*error" 		: "fourOfour"
		   },
		   index: function(){
		   	   if (nowView){
		   	   		nowView.undelegateEvents();
		   	   }
		       // Homepage 
		       require(['view/user/userView'],function(userView){
		       		nowView = new userView();
		       });
		       
		   },
		   userData: function(action){
		   	   if (nowView){
		   	   		nowView.undelegateEvents();
		   	   }
		       // Homepage 
		       require(['view/user/userDataView'],function(userDataView){
		       		nowView = new userDataView({name:action});
		       });
		       
		   },

		   userjob: function(){
		   	   if (nowView){
		   	   		nowView.undelegateEvents();
		   	   }
		       // Homepage 
		       require(['view/job/userjobView'],function(userjobView){
		       		
		       		nowView = new userjobView();
		       });
		       
		   },
		   specialty : function(){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		        // Homepage 
		        require(['view/shuake/specialtyView'],function(specialtyView){
		       		
		       		nowView = new specialtyView();
		        });
		   },

		   vip : function(){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		        // Homepage 
		        require(['view/vipView'],function(vipView){
		       		
		       		nowView = new vipView();
		        });

		   },

		   topup : function(action){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		        // Homepage 
		        require(['view/topupView'],function(topupView){
		       		
		       		nowView = new topupView({name:action});
		        });

		   },

		   seckill : function(){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/seckillView'],function(seckillView){
		       		nowView = new seckillView();
		       });
		   },

		   ensure : function(){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/ensureView'],function(ensureView){
		       		nowView = new ensureView();
		       });
		   },

		   complain : function(){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/complain/complainView'],function(complainView){
		       		nowView = new complainView();
		       });
		   },
		   
		   thread : function(){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/threadView'],function(threadView){
		       		nowView = new threadView();
		       });
		   },

		   message : function(action){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/message/messageView'],function(messageView){
		       		nowView = new messageView({name:action});
		       });
		   },
		   
		   express : function(){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/expressView'],function(expressView){
		       		nowView = new expressView();
		       });
		   },
		   black : function(){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/blackView'],function(blackView){
		       		nowView = new blackView();
		       });
		   },
		   
		   payment : function(action){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/payment/paymentView'],function(paymentView){
		       		nowView = new paymentView({name:action});
		       });
		   },
		   paydetails : function(action){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/log/paydetailsView'],function(paydetailsView){
		       		nowView = new paydetailsView({name:action});
		       });
		   },
		   rechange : function(){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/rechangeView'],function(rechangeView){
		       		nowView = new rechangeView();
		       });
		   },

		   autoam :  function(){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/autoamView'],function(autoamView){
		       		nowView = new autoamView();
		       });
		   },
		   
		   test : function(){
		   		if (nowView){
		   	   		nowView.undelegateEvents();
		   	    }
		   	    require(['view/testView'],function(testView){
		       		nowView = new testView();
		       });
		   },	
		   fourOfour: function(error) {
		       // 404 page
		   }
		});
		this.init = function(){
			/*会员左边栏*/
			$(".user_left .renwu1").hover(function(){
				$(this).css("background-position","-64px -335px");
				$(".left_alert").show();
			});
			$(".user_left:not(.left_alert,renwu1)").mouseleave(function(){
				$(".user_left .renwu1").css("background-position","-68px -387px");
				$(".left_alert").hide();
			}); 
			$(".left_main ul li a").hover(function(){
				$(this).next("i").html("<img src='/static/images/user/dadian.png'>");
			})
			$(".left_main ul li a").mouseleave(function(){
				$(this).next("i").empty();
			})

			var r = new router();
			Backbone.history.start();
		}
		return this;
});