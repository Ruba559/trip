
var agH1 = document.getElementById("ChildrenAgeH1");
var divAgeChld = document.getElementById("DivAgeChilde");
var numchilde  = document.getElementsByClassName("numChilde");
 var guests = document.getElementById("guests");
    var ChildeCnt = document.getElementById('CountChilde');
    var AdultCnt = document.getElementById('CountAdult');
    var al = document.getElementById("al").value ;
    var styleInput = document.getElementById("al");
    var x = 1;
    var ad = document.getElementById("ad").value ;
    var styleInput2 = document.getElementById("ad");
    var a = 1;
    var ad = document.getElementById("ch").value ;
    var styleInput3 = document.getElementById("ch");
    var c = 0;


    function PlRoom(){
        if(x<15){
        PluseNumber();
        styleInput.classList.remove("border-danger");
         document.getElementById("al").value = x.toString();
        }
        else if(x >= 15)
        {
            styleInput.classList.add("border-danger");
            
        }
    }
    function RPRoom()
    {
        if(x > 1){
        rePluseNumber();
        styleInput.classList.remove("border-danger");
         document.getElementById("al").value = x.toString();
        }
        else if ( x <= 1){
            styleInput.classList.add("border-danger");
        }
    }
    function PluseNumber(){
        x++;
    }
    function rePluseNumber(){
        x--;
    }
    /*------------adult---------*/
    function PlAdult(){
        if(a <15){
        APluseNumber();
        styleInput2.classList.remove("border-danger");
         document.getElementById("ad").value = a.toString();
        }
        else if(a >= 15)
        {
            styleInput2.classList.add("border-danger");
            
        }
    }
    function RPAdult()
    {
        if(a > 1){
        ArePluseNumber();
        styleInput2.classList.remove("border-danger");
         document.getElementById("ad").value = a.toString();
        }
        else if ( a <= 1){
            styleInput2.classList.add("border-danger");
        }
    }
    function APluseNumber(){
        a++;
    }
    function ArePluseNumber(){
        a--;
    }
    /*-----------Childe-----------*/
    function PlChilde(){
        if(c <15){
        CPluseNumber();
        styleInput3.classList.remove("border-danger");
         document.getElementById("ch").value = c.toString();
        }
        else if(c >= 15)
        {
            styleInput3.classList.add("border-danger");
            
        }
    }
    function RPChild()
    {
        if(c > 0){
        CrePluseNumber();
        styleInput3.classList.remove("border-danger");
         document.getElementById("ch").value = c.toString();
        }
        else if ( c <= 0){
            styleInput3.classList.add("border-danger");
        }
    }
    function CPluseNumber(){
        c++;
    }
    function CrePluseNumber(){
        c--;
    }

    function doneForm()
    {
     guests.innerHTML = "Guests " + (a + c)  ;
     AdultCnt.value = (a+ c).toString();
    }

    /*--====Add AgeChilde =========-*/
    function ageCildes(){
        
        var divAgeChld1 = document.getElementById("DivAgeChilde2");
    
        
        divAgeChld.innerHTML = "";
        if( c > 0)
        agH1.innerHTML = "Chlidren's age *";
        else if ( c == 0)
        agH1.innerHTML = "";
        for( i= 0 ; i< c ; i ++){
            
            divAgeChld.innerHTML += divAgeChld1.innerHTML;
            
        }
            
    }

    /*---------------animation text--------------*/
    
	
		 var text = document.getElementById('p1');
        var newDom = '';
        var animationDelay = 6;

        for(let i = 0; i < text.innerText.length; i++)
        {
            newDom += '<span class="char">' + (text.innerText[i] == ' ' ? '&nbsp;' : text.innerText[i])+ '</span>';
        }

        text.innerHTML = newDom;
        var length = text.children.length;

        for(let i = 0; i < length; i++)
        {
            text.children[i].style['animation-delay'] = animationDelay * i + 'ms';
        }
    /*-------------p2-------------------------------------*/
	var text2 = document.getElementById('p2');
        var newDom2 = '';
        var animationDelay2 = 6;

        for(let i = 0; i < text2.innerText.length; i++)
        {
            newDom2 += '<span class="char">' + (text2.innerText[i] == ' ' ? '&nbsp;' : text2.innerText[i])+ '</span>';
        }

        text2.innerHTML = newDom2;
        var length2 = text2.children.length;

        for(let i = 0; i < length2; i++)
        {
            text2.children[i].style['animation-delay'] = animationDelay2 * i + 'ms';
        }
		/*---------------------p3-----------------*/
		var text3 = document.getElementById('p3');
        var newDom3 = '';
        var animationDelay3 = 6;

        for(let i = 0; i < text3.innerText.length; i++)
        {
            newDom3 += '<span class="char">' + (text3.innerText[i] == ' ' ? '&nbsp;' : text3.innerText[i])+ '</span>';
        }

        text3.innerHTML = newDom3;
        var length3 = text3.children.length;

        for(let i = 0; i < length3; i++)
        {
            text3.children[i].style['animation-delay'] = animationDelay3 * i + 'ms';
        }