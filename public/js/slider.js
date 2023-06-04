let span = document.getElementsByTagName('span');
	// let product = document.getElementsByClassName('product')
	let product1 = document.getElementsByClassName('product1')
	let product2 = document.getElementsByClassName('product2')
	let product3 = document.getElementsByClassName('product3')
	let product4 = document.getElementsByClassName('product4')

	let product_page = Math.ceil(product.length/4);
	let product_page1 = Math.ceil(product1.length/4);
	let product_page2 = Math.ceil(product2.length/4);
	let product_page3 = Math.ceil(product3.length/4);
	let product_page4 = Math.ceil(product4.length/4);

	let l = 0;
	let l1 = 0;
	let l2 = 0;
	let l3 = 0;
	let l4 = 0;

	let movePer = 25.34;
	let movePer1 = 25.34;
	let movePer2 = 25.34;
	let movePer3 = 25.34;
	let movePer4 = 25.34;

	let maxMove = 203;
	let maxMove1 = 203;
	let maxMove2 = 203;
	let maxMove3 = 203;
	let maxMove4 = 203;

	// mobile_view
	let mob_view = window.matchMedia("(max-width: 768px)");
	let mob_view1 = window.matchMedia("(max-width: 768px)");
	let mob_view2 = window.matchMedia("(max-width: 768px)");
	let mob_view3 = window.matchMedia("(max-width: 768px)");
	let mob_view4 = window.matchMedia("(max-width: 768px)");

	if (mob_view.matches)
	 {
	 	movePer = 50.36;
	 	maxMove = 504;
	 }
	 if (mob_view1.matches)
	 {
	 	movePer1 = 50.36;
	 	maxMove1 = 504;
	 }

	 if (mob_view2.matches)
	 {
	 	movePer2 = 50.36;
	 	maxMove2 = 504;
	 }
	 if (mob_view3.matches)
	 {
	 	movePer3 = 50.36;
	 	maxMove3 = 504;
	 }
	 if (mob_view4.matches)
	 {
	 	movePer4 = 50.36;
	 	maxMove4 = 504;
	 }

	let right_mover = ()=>{
		l = l + movePer;
		if (product == 1){l = 0; }
		for(const i of product)
		{
			if (l > maxMove){l = l - movePer;}
			i.style.left = '-' + l + '%';
		}

	}
	let left_mover = ()=>{
		l = l - movePer;
		if (l<=0){l = 0;}
		for(const i of product){
			if (product_page>1){
				i.style.left = '-' + l + '%';
			}
		}
	}


	let right_mover1 = ()=>{
		l1 = l1 + movePer1;
		if (product1 == 1){l1 = 0; }
		for(const i of product1)
		{
			if (l1 > maxMove1){l1 = l1 - movePer1;}
			i.style.left = '-' + l1 + '%';
		}

	}
	let left_mover1 = ()=>{
		l1 = l1 - movePer1;
		if (l1<=0){l1 = 0;}
		for(const i of product1){
			if (product_page1>1){
				i.style.left = '-' + l1 + '%';
			}
		}
	}

	let right_mover2 = ()=>{
		l2 = l2 + movePer2;
		if (product2 == 1){l2 = 0; }
		for(const i of product2)
		{
			if (l2 > maxMove2){l2 = l2 - movePer2;}
			i.style.left = '-' + l2 + '%';
		}

	}
	let left_mover2 = ()=>{
		l2 = l2 - movePer2;
		if (l2<=0){l2 = 0;}
		for(const i of product2){
			if (product_page2>1){
				i.style.left = '-' + l2 + '%';
			}
		}
	}
	let right_mover3 = ()=>{
		l3 = l3 + movePer3;
		if (product3 == 1){l3 = 0; }
		for(const i of product3)
		{
			if (l3 > maxMove3){l3 = l3 - movePer3;}
			i.style.left = '-' + l3 + '%';
		}

	}
	let left_mover3 = ()=>{
		l3 = l3 - movePer3;
		if (l3<=0){l3 = 0;}
		for(const i of product3){
			if (product_page3>1){
				i.style.left = '-' + l3 + '%';
			}
		}
	}
	let right_mover4 = ()=>{
		l4 = l4 + movePer4;
		if (product4 == 1){l4 = 0; }
		for(const i of product4)
		{
			if (l4 > maxMove4){l4 = l4 - movePer4;}
			i.style.left = '-' + l4 + '%';
		}

	}
	let left_mover4 = ()=>{
		l4 = l4 - movePer4;
		if (l4<=0){l4 = 0;}
		for(const i of product4){
			if (product_page4>1){
				i.style.left = '-' + l4 + '%';
			}
		}
	}


	// span[1].onclick = ()=>{right_mover();}
	// span[0].onclick = ()=>{left_mover();}
	// span[3].onclick = ()=>{right_mover1();}
	// span[2].onclick = ()=>{left_mover1();}
	// span[5].onclick = ()=>{right_mover2();}
	// span[4].onclick = ()=>{left_mover2();}
	// span[7].onclick = ()=>{right_mover3();}
	// span[6].onclick = ()=>{left_mover3();}
	// span[9].onclick = ()=>{right_mover4();}
	// span[8].onclick = ()=>{left_mover4();}

