  $(document).ready(function(){

$(window).resize(function(){
  var width = $(window).width();
  console.log(width);
  
    $('.aboutus').css('width', width);
});
    // MASTHED

    let canvas = document.querySelector('canvas')
let masthead=document.querySelector('masthead')

canvas.height=window.innerHeight;
canvas.width=window.innerWidth;
c=canvas.getContext('2d');

let mouse ={
    x:undefined,
    y:undefined
}
addEventListener('mousemove',function(event){
mouse.x=event.x;
mouse.y=event.y;
console.log('mouse.x : '+mouse.x);

})
addEventListener('resize',function(){
canvas.height=window.innerHeight;
canvas.width=window.innerWidth;
init();
})

let x=300;
let y=300;
let dx=2;
let dy=2;
let radius=30;
function circle(x,y,dx,dy,radius)
{
    this.x=x;
    this.y=y;
    this.dx=dx;
    this.dy=dy;
    this.radius=radius;
    this.colour=['#97BABE','#5C9FA5','#42858B','#7da0a4','#0f5258'];
    this.color=this.colour[Math.floor(Math.random()*6)];

    this.create=function()
    {
        c.beginPath();
        c.arc(this.x,this.y,this.radius,0,2*Math.PI,false);
        c.fillStyle=this.color;
        c.fill();
    }

    this.update=function()
    { 
       
        if(this.x>innerWidth||this.x<0)
        this.dx=-this.dx;
        if(this.y>innerHeight||this.y<0)
        this.dy=-this.dy
        this.x+=this.dx;
        this.y+=this.dy;
        if(mouse.x-this.x<50&&mouse.y-this.y<50&&mouse.x-this.x>-50&&mouse.y-this.y>-50&&this.radius<50){
            this.radius+=1;
        }
        else if(this.radius>2){
            this.radius-=1;
        }
        this.create();
    }
}
let cir=[];
function init(){
cir=[];
for(let i=0;i<600;i++)
{    
    x=Math.random()*(innerWidth-radius*2)+radius;
    y=Math.random()*(innerHeight-radius*2)+radius;
    dx=(Math.random()*4)-2;
    dy=(Math.random()*4)-2;
    radius=Math.random()*30;
    
    cir.push(new circle(x,y,dx,dy,radius));
}
}


 function move()
{
    // c.beginPath();
    // c.fill();
    c.clearRect(0,0,innerWidth,innerHeight)
    requestAnimationFrame(move);
    // c.strokeStyle=color[1];

    for(let i=0;i<600;i++)
    {  
        cir[i].update();
    }
}

init();
move();
let elemTop;
function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    // var docViewBottom = docViewTop + $(window).height();
     elemTop = $(elem).offset().top;
    // var elemBottom = elemTop + $(elem).height();
    // return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom) && (elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    return ( elemTop <= docViewTop);
}

$(window).scroll(function() {    
    if(isScrolledIntoView($('.aboutus')) && window.innerWidth>750)
    {
        $('.nav').css("opacity","1");
    }
    else{
        $('.nav').css("opacity","0");

    }    
});
    

    setInterval(function(){
    $('.scroll-link').addClass('neeche')
      setTimeout(function(){
        $('.scroll-link').removeClass('neeche')
    }, 900)
  }, 1800);

  
 setTimeout(function(){
    $('.scroll-link').removeClass('jabardasti')
  }, 800); 
$('.scroll-link').click(function(){
        $('html, body').animate({ scrollTop: $('.aboutus').offset().top}, 750)
    })

// -----------------------------------------------MASTHEAD ENDS-------------------------------------------------

  var element_position = $('#scroll-to').offset().top;
var screen_height = $(window).height();
var activation_offset = 0.3;//determines how far up the the page the element needs to be before triggering the function
var activation_point = element_position - (screen_height * activation_offset);
var max_scroll_height = $('body').height() - screen_height - 5;//-5 for a little bit of buffer

//Does something when user scrolls to it OR
//Does it when user has reached the bottom of the page and hasn't triggered the function yet
$(window).on('scroll', function() {
    var y_scroll_pos = window.pageYOffset;

    var element_in_view = y_scroll_pos > activation_point;
    var has_reached_bottom_of_page = max_scroll_height <= y_scroll_pos && !element_in_view;

    if(element_in_view||has_reached_bottom_of_page) {
        //Do something
        counting();
 	counting1();
 	counting2();
 	counting3();
    }
});
 	var count=document.getElementById('counter').innerText;
 	var temp=count-0
 	function counting (){
 		if(temp<=400){
 			setTimeout(function(){
 				document.getElementById('counter').innerText=temp;
 				temp=temp+2;
 				counting();
 			},40);
 		}
 			else{
 				setTimeout(function(){
 					document.getElementById('counter').innerText=400;
 				},0)
 			}
 		}
 		
 	var count1=document.getElementById('counter1').innerText;
 	var temp1=count1-0
 	function counting1 (){
 		if(temp1<=40){
 			setTimeout(function(){
 				document.getElementById('counter1').innerText=temp1;
 				temp1=temp1+1;
 				counting1();
 			},120);
 		}
 			else{
 				setTimeout(function(){
 					document.getElementById('counter1').innerText=40;
 				},120)
 			}
 		}

 		var count2=document.getElementById('counter2').innerText;
 	var temp2=count2-0;
 	function counting2 (){
 		if(temp2<=10){
 			setTimeout(function(){
 				document.getElementById('counter2').innerText=temp2;
 				temp2=temp2+1;
 				counting2();
 			},160);
 		}
 			else{
 				setTimeout(function(){
 					document.getElementById('counter2').innerText=10;
 				},160)
 			}
 		}


 		var count3=document.getElementById('counter3').innerText;
 	var temp3=count3-0;
 	function counting3 (){
 		if(temp3<=25){
 			setTimeout(function(){
 				document.getElementById('counter3').innerText=temp3;
 				temp3=temp3+1;
 				counting3();
 			},200);
 		}
 			else{
 				setTimeout(function(){
 					document.getElementById('counter3').innerText=25;
 				},200)
 			}
 		}
 	
 	
  // Original JavaScript code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

 

  window.addEventListener("DOMContentLoaded", function(e) {

    var stage = document.getElementById("stage");
    var fadeComplete = function(e) { stage.appendChild(arr[0]); };
    var arr = stage.getElementsByTagName("img");
    for(var i=0; i < arr.length; i++) {
      arr[i].addEventListener("animationend", fadeComplete, false);
    }

  }, false);
  

  console.log("hey");
  $(".without-value1 input").on("input propertychange",function(e){
    $(".without-value1").toggleClass("with-value1",!!$(e.target).val());
  });
  $(".without-value2 input").on("input propertychange",function(e){
    $(".without-value2").toggleClass("with-value1",!!$(e.target).val());
  });
  $(".without-value3 input").on("input propertychange",function(e){
    $(".without-value3").toggleClass("with-value1",!!$(e.target).val());
  });
  $(".without-value4 textarea").on("input propertychange",function(e){
    $(".without-value4").toggleClass("with-value1",!!$(e.target).val());
  });

  $(".without-value1 input").on("focus", function() {
        $(".without-value1").addClass("with-focus");
    })
    $(".without-value1 input").on("blur", function() {
        $(".without-value1").removeClass("with-focus");
    });

    $(".without-value2 input").on("focus", function() {
        $(".without-value2").addClass("with-focus");
    })
    $(".without-value2 input").on("blur", function() {
        $(".without-value2").removeClass("with-focus");
    });

    $(".without-value3 input").on("focus", function() {
        $(".without-value3").addClass("with-focus");
    })
    $(".without-value3 input").on("blur", function() {
        $(".without-value3").removeClass("with-focus");
    });

    $(".without-value4 textarea").on("focus", function() {
        $(".without-value4").addClass("with-focus");
    })
    $(".without-value4 textarea").on("blur", function() {
        $(".without-value4").removeClass("with-focus");
    });
});

 //  $(#name)(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );

  

  //   setInterval(function(){
  //   $('.scroll-link').addClass('neeche')
  //     setTimeout(function(){
  //       $('.scroll-link').removeClass('neeche')
  //   }, 900)
  // }, 1800);

  //    setTimeout(function(){
  //   $('.scroll-link').removeClass('jabardasti')
  // }, 800); 
