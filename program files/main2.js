let carts=document.querySelectorAll('.addcart');

let products=[
    {
		name:'Apple',
		tag:'apple',
		price:16,
		incart:0

	},
	{
		name:'avocado',
		tag:'avocado',
		price:25,
		incart:0

	},
	{
		name:'banana',
		tag:'banana',
		price:20,
		incart:0

	},
	{
		name:'blueberry',
		tag:'blue',
		price:20,
		incart:0

	},
	{
		name:'grape',
		tag:'grape',
		price:40,
		incart:0

	},
	{
		name:'guava',
		tag:'guava',
		price:40,
		incart:0

	},
	{
		name:'jackfruit',
		tag:'jack',
		price:50,
		incart:0

	},
	{
		name:'orange',
		tag:'orange',
		price:40,
		incart:0

	},
	{
		name:'papaya',
		tag:'papaya',
		price:60,
		incart:0

	},
	{
		name:'pineapple',
		tag:'pine',
		price:40,
		incart:0

	},
	{
		name:'promegrante',
		tag:'promo',
		price:40,
		incart:0

	},
	{
		name:'strawberry',
		tag:'stra',
		price:60,
		incart:0

	}
];

for(let i=0; i<carts.length; i++){
	carts[i].addEventListener('click',() => {
		cartnumber(products[i]);
		totalcost(products[i])
	})
}

function onloadcart(){
	let productnumber = localStorage.getItem('cartnumber');

	if(productnumber){
		document.querySelector('.cart span').textContent=productnumber;

	}
}

function cartnumber(product){

	let productnumber = localStorage.getItem('cartnumber');

	productnumber=parseInt(productnumber);
	if(productnumber){
		localStorage.setItem('cartnumber',productnumber+1);
		document.querySelector('.cart span').textContent=productnumber+1;
	}else{
		localStorage.setItem('cartnumber',1);
		document.querySelector('.cart span').textContent=1;
	}
	setItem(product);
     
	
}
function setItem(product){
	let cartitem=localStorage.getItem('productsincart');
	cartitem=JSON.parse(cartitem);

	if(cartitem !=null){

		if(cartitem[product.tag] == undefined){
			cartitem={
				...cartitem,
				[product.tag]:product
			}
		}
		cartitem[product.tag].incart += 1;

	}else{
	product.incart=1;

	cartitem={
		[product.tag]:product
	}
}
	localStorage.setItem("productsincart",JSON.stringify(cartitem));
	
}
function totalcost(product){
	let cartcost = localStorage.getItem('totalcost');
	console.log("my cartcost is",cartcost);
	console.log(typeof cartcost);

	if(cartcost !=null){
	   cartcost = parseInt(cartcost);
	   localStorage.setItem("totalcost",cartcost+product.price);
    }else{
	localStorage.setItem("totalcost",product.price);

}


}
function displaycart(){
	let cartitem = localStorage.getItem("productsincart");
	cartitem=JSON.parse(cartitem);
	let productcontainer=document.querySelector(".products");
	let cartcost = localStorage.getItem('totalcost');
	console.log(cartitem);

	if(cartitem && productcontainer){
		productcontainer.innerHTML='';
		Object.values(cartitem).map(item => {
			productcontainer.innerHTML += `
			<div class="product">
			    <input type="button" value="close">
			    <img src="./${item.tag}.jpg">
			    <span>${item.name}</span>
		    </div>

			<div class="price">
			   Rs ${item.price},00
			</div>   

			<div class="quantity">
			   <input  class="qtyid" type="number" id="quantity" value="${item.incart}">
			</div>

			<div class="total">
			    Rs ${item.incart * item.price},00
			</div>

			`;
			 
		});

		productcontainer.innerHTML += `
		    <div class="basketTotalContainer">
		        <h4 class="basketTotaltitle">
		            total
		        </h4>
		        <h4 class="baskettotal">
		           Rs${cartcost},00
		        </h4>       

		`


	}
}
onloadcart();
displaycart();