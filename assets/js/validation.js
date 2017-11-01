$(function(){
	$("#name_error").hide();
	$("#title_error").hide();
	$("#type_error").hide();
	$("#address_error").hide();
	$("#builtup_error").hide();
	$("#description_error").hide();
	$("#mobile_error").hide();
	$("#email_error").hide();
	$("#facilities_error").hide();
	$("#city_error").hide();
	$("#area_error").hide();
	$("#price_error").hide();
	var error_name=false;
	var error_title=false;
	var error_type=false;
	var error_address=false;
	var error_builtup=false;
	var error_description=false;
	var error_mobile=false;
	var error_email=false;
	var error_facilities=false;
	var error_city=false;
	var error_area=false;
	var error_price=false;
	
	$("#name").focusout(function(){
		check_name();
	});

	$("#email").focusout(function(){
		check_email();
	});
	$("#title").focusout(function(){
		check_title();
	});
	$("#type").focusout(function(){
		check_type();
	});
	$("#address").focusout(function(){
		check_address();
	});
	$("#builtup").focusout(function(){
		check_builtup();
	});
	$("#description").focusout(function(){
		check_description();
	});
	$("#email").focusout(function(){
		check_email();
	});
	$("#facilities").focusout(function(){
		check_facilities();
	});
	$("#city").focusout(function(){
		check_city();
	});
	$("#area").focusout(function(){
		check_area();
	});
	$("#price").focusout(function(){
		check_price();
	});
	$("#mobile").focusout(function(){
		check_mobile();
	});
	
	function check_name(){
		var length=$("#name").val().length;
		if(length<3){
			$("#name_error").html("Please enter valid name");
			$("#name_error").show();
			error_city=true;
		}else{
			$("#city_error").hide();
		}
	}
	function check_email(){ 
		var email = $("#email").val();
		var re =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if (email == '' || !re.test(email))
		{
			$("#email_error").html("Please enter valid email");
			$("#email_error").show();
			error_email=true;
		}else{
			$("#email_error").hide();
		}
	}
	function check_mobile(){
		var pattern = new RegExp('[0-9]{10}');
		var length=$("#mobile").val().length;
		if(pattern.test($("#mobile").val())&&length==10){
			$("#mobile_error").hide();
		}else{
			$("#mobile_error").html("Invalid mobile no.");
			$("#mobile_error").show();
			error_mobile=true;
		}
	}
	function check_title(){
		var length=$("#title").val().length;
		if(length<=3){
			$("#title_error").html("Title required and must contains atleast 4 characters");
			$("#title_error").show();
			error_title=true;
		}else{
			$("#title_error").hide();
		}
	}
	function check_type(){
		var length=$("#type").val().length;
		if(length==0){
			$("#type_error").html("Type Field is required");
			$("#type_error").show();
			error_type=true;
		}else{
			$("#type_error").hide();
		}
	}
	function check_price(){
		var pattern =/^(\s*|\d+)$/;
		if(pattern.test($("#price").val())){
			$("#price_error").hide();
			
		}else{
			$("#price_error").html("Please enter correct price");
			$("#price_error").show();
			error_price=true;
		}
	}
	function check_address(){
		var length=$("#address").val().length;
		if(length<=3){
			$("#address_error").html("Please enter address");
			$("#address_error").show();
			error_address=true;
		}else{
			$("#address_error").hide();
		}
	}
	function check_builtup(){
		var pattern = new RegExp('[0-9]');
		var length=$("#builtup").val().length;
		if(pattern.test($("#builtup").val()) && length>2){
			$("#builtup_error").hide();
			
		}else{
			$("#builtup_error").html("Please enter valid builtup area");
			$("#builtup_error").show();
			error_builtup=true;
		}
	}
	function check_description(){
		var length=$("#description").val().length;
		if(length<=3){
			$("#description_error").html("Please enter description, description contains atlest 4 characters");
			$("#description_error").show();
			error_description=true;
		}else{
			$("#description_error").hide();
		}
	}
	function check_facilities(){
		var length=$("#facilities").val().length;
		if(length<=3){
			$("#facilities_error").html("Please enter facilities, Facilities must contains atleast 4 characters");
			$("#facilities_error").show();
			error_facilities=true;
		}else{
			$("#facilities_error").hide();
		}
	}
	function check_city(){
		var length=$("#city").val().length;
		if(length<=2){
			$("#city_error").html("Please enter valid city name");
			$("#city_error").show();
			error_city=true;
		}else{
			$("#city_error").hide();
		}
	}
	function check_area(){
		var length=$("#area").val().length;
		if(length<=2){
			$("#area_error").html("Please enter area");
			$("#area_error").show();
			error_area=true;
		}else{
			$("#area_error").hide();
		}
	}
	$("#myprofile").submit(function(){
		 error_address=false;
		 error_city=false;
		 error_mobile=false;
		 error_builtup=false;
		 check_address();
		 check_city();
		 check_mobile();
		 check_builtup();
		 if(
			 error_address==false &&
			 error_city==false &&
			 error_mobile==false)
		 {
			 return true;
		 }else{
			 return false;
		 }
	});
	//realestate form submition
	$("#real_form").submit(function(){
		error_name=false;
		error_email=false;
		error_mobile=false;
		error_price=false;
		error_title=false;
		error_address=false;
		error_description=false;
		error_facilities=false;
		error_city=false;
		error_area=false;
		error_builtup=false;
		 check_name();
		 check_title();
		 check_address();
		 check_description();
		 check_price();
		 check_facilities();
		 check_city();
		 check_mobile();
		 check_email();
		 check_area();
		 check_builtup();
		 if(error_name==false && error_price==false && error_title==false && error_address==false && error_description==false && error_facilities==false && error_mobile==false && error_email==false && error_city==false && error_area==false && error_builtup==false){
			 return true;
		 }else{
			 return false;
		 }
	});
	//Tution form
	$("#tut_form").submit(function(){
		error_title=false;
		error_address=false;
		error_description=false;
		error_city=false;
		error_area=false;
		 check_title();
		 check_address();
		 check_description();
		 check_city();
		 check_area();
		 if(error_title==false && error_address==false && error_description==false &&  error_city==false && error_area==false ){
			 return true;
		 }else{
			 return false;
		 }
	});
	//Hotel form
	$("#hotel_form").submit(function(){
		error_title=false;
		error_address=false;
		error_description=false;
		error_city=false;
		error_area=false;
		error_facilities=false;
		 check_title();
		 check_address();
		 check_description();
		 check_facilities();
		 check_city();
		 check_area();
		 if(error_title==false && error_address==false && error_description==false &&  error_city==false && error_area==false && error_facilities==false){
			 return true;
		 }else{
			 return false;
		 }
	});
	//Travellig form
	$("#travel_form").submit(function(){
		error_title=false;
		error_address=false;
		error_description=false;
		error_city=false;
		error_area=false;
		 check_title();
		 check_address();
		 check_description();
		 check_city();
		 check_area();
		 if(error_title==false && error_address==false && error_description==false &&  error_city==false && error_area==false){
			 return true;
		 }else{
			 return false;
		 }
	});
	//Automobile form
	$("#auto_form").submit(function(){
		error_title=false;
		error_address=false;
		error_description=false;
		error_city=false;
		error_area=false;
		 check_title();
		 check_address();
		 check_description();
		 check_city();
		 check_area();
		 if(error_title==false && error_address==false && error_description==false &&  error_city==false && error_area==false){
			 return true;
		 }else{
			 return false;
		 }
	});
	//Other Form
	$("#other_form").submit(function(){
		error_title=false;
		error_address=false;
		error_description=false;
		error_city=false;
		error_area=false;
		 check_title();
		 check_address();
		 check_description();
		 check_city();
		 check_area();
		 if(error_title==false && error_address==false && error_description==false &&  error_city==false && error_area==false){
			 return true;
		 }else{
			 return false;
		 }
	});
	//Real Search
	$("#real_search").submit(function(){
		error_type=false;
		error_price=false;
		error_city=false;
		 check_type();
		 check_price();
		 check_city();
		 if(error_type==false && error_city==false && error_price==false){
			 return true;
		 }else{
			 return false;
		 }
	});
});