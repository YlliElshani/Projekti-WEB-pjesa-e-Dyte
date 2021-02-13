const slideItems = document.querySelector('.slideItems');
const slideImg =document.querySelectorAll('.slideItems img');


const paraBtn=document.querySelector('#paraBtn');
const mbasBtn=document.querySelector('#mbasBtn');


let counter=1
const size=slideImg[0].clientWidth;

slideItems.style.transform='tranalateX('+(-size*counter)+'px)'; 

paraBtn.addEventListener('click',()=>{
	if (counter>=slideImg.length-1) {
		return;
	}
	slideItems.style.transition="transform 0.4s ease-in-out";
	counter++ ;
	slideItems.style.transform='translateX('+(-size*counter)+'px)';
});
mbasBtn.addEventListener('click',()=>{
		if (counter<=0) {
		return;
	}
	slideItems.style.transition="transform 0.4s ease-in-out";
	counter-- ;
	slideItems.style.transform='translateX('+(-size*counter)+'px)'; 
});

slideItems.addEventListener('transitionend', ()=>{
	if (slideImg[counter].id==='last') {
		slideItems.style.tranform="none";
		counter=slideImg.length-2;
		slideItems.style.transform='translateX('+(-size*counter)+'px)'; 
	}
		if (slideImg[counter].id==='first') {
		slideItems.style.tranform="none";
		counter=slideImg.length-counter;
		slideItems.style.transform='translateX('+(-size*counter)+'px)'; 
	}
});