$(document).ready(function(){
	//alert($('.total').length);
	
	$("button").click(function() {
		alert('add customer');

		var id = $('#customer-id').val();
		var name = $('#customer-name').val();
		var address = $('#customer-address').val();
		var url = "/alajeeeb/Customers/add";//http://localhost:8000
		
		$.post(url,
	    {
	        id: id,
	        name: name,
	        address:address
	    },
	    function(data, status){
	        alert(data);
	    });


	});

    $(".product_id").keyup(function(){
    	
    	var clicked = $(this);
    	var clicked_id =$(this).attr('id').split("-")[1] ;
    	var AppUrl = "/alajeeeb/Products/getProductById/";//http://localhost:8000
    	
    	var price =$("#soldproducts-"+clicked_id+"-price");
    	var quantity =$("#soldproducts-"+clicked_id+"-quantity");
    	quantity.val(0);

    	var name = $("#soldproducts-"+clicked_id+"-name");
    	var waranty = $("#soldproducts-"+clicked_id+"-waranty");
    	var avquantity = $("#soldproducts-"+clicked_id+"-avquantity");
    	
    	//alert(AppUrl +clicked.val()+".json");
    	$.ajax({url: AppUrl +clicked.val()+".json", success: function(result){
        
         var product = result.products;

         price.val(product.price);
         name.val(product.name);
         waranty.val(product.waranty);
         avquantity.val(product.quantity);
    }});

        //alert("#soldproducts-"+clicked+"-quantity");

    });
	$(".quantity").keyup(function(){
    	var clicked = $(this);
    	var clicked_id =$(this).attr('id').split("-")[1] ;
    	
    	
    	var price =$("#soldproducts-"+clicked_id+"-price");
  

    	var total = $("#soldproducts-"+clicked_id+"-total");
    	total.val(clicked.val() * price.val());

    });

	$('.name').change(function(){
	
    	var clicked = $(this);
    	var clicked_id =$(this).attr('id').split("-")[1] ;
    	var AppUrl = "/alajeeeb/Products/getProductByName/";//http://localhost:8000
    	
    	var price =$("#soldproducts-"+clicked_id+"-price");
    	var quantity =$("#soldproducts-"+clicked_id+"-quantity");
    	quantity.val(0);

    	var id = $("#soldproducts-"+clicked_id+"-product-id");
    	var waranty = $("#soldproducts-"+clicked_id+"-waranty");
    	var avquantity = $("#soldproducts-"+clicked_id+"-avquantity");

    	//alert(AppUrl +clicked.val()+".json");
	    	$.ajax({url: AppUrl +clicked.val()+".json", success: function(result){
	        // console.log(result.products);
	         //result = JSON.parse(result);
	         //alert(result);
	         var product = result.products;
	         price.val(product.price);
	         id.val(product.id);
	         waranty.val(product.waranty);
	         avquantity.val(product.quantity);

	    		}
			});
	});

	$('.name').keyup(function(){
	
    	var clicked = $(this);
    	var clicked_id =$(this).attr('id').split("-")[1] ;
    	var AppUrl = "alajeeeb/Products/getProductsByName/";//http://localhost:8000/
    	

			$.ajax({url: AppUrl +clicked.val()+".json", success: function(result){
	        
	        
			var products = result.products;
	       	var  list = [];
	       	var i =0;
	       	products.forEach(function(product) {
	       		list[i]= product.name;
	       		i++;
	       	})

			clicked.autocomplete({source: list});
			//console.log(list);
	        	}
			});
		
	});




    
    $('input').change(function(){
    	//alert("هلا ولااه");
    	var sum = 0;
    	var i = 0;
    	var c =true;
    	var length = $('.total').length;

    	while(i<length){
    		var temp = $("#soldproducts-"+i+"-total");
    		sum += parseInt(temp.val());
    		i++;
    	}
    	$("#total").val(sum);

    });

     $("#total").focus(function(){
    	//alert("you can not change this block");
    	$(this).blur();

    });
     $(".total").focus(function(){
    	//alert("you can not change this block");
    	$(this).blur();

    });
    




});

