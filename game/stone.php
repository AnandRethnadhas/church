<html>
    <head></head>
    <title></title>
    <script type="text/javascript">
        //let name=prompt("Enter your name");
        var uinput="stone"
        var uscore=0;
        var cscore=0;
        var uselected="";
        var cselected="";
        var draw=0;
        //alert("cscore "+cscore);
        
        var ar1=new Array("stone","paper","sissor");
        var ran=1;
     while(uscore<3 && cscore<3){
        uinput=prompt("Enter your choice: 1 for stone, 2 for paper and 3 for sissor");
        ran=Math.floor(Math.random()*3);
        //alert(ran);
        //alert("You have selected :"+ar1[uinput]);
        alert("you selected "+ar1[uinput-1]+" ,computer selected "+ar1[ran]);
        //alert();
        uselected=ar1[uinput-1];
        cselected=ar1[ran];
        if((uselected=="paper" && cselected=="stone") || (uselected=="sissor" && cselected=="paper") || (uselected=="stone" && cselected=="sissor")){
            //alert("user wins");
            uscore=uscore+1;            
        }else if((cselected=="paper" && uselected=="stone") || (cselected=="sissor" && uselected=="paper") || (cselected=="stone" && uselected=="sissor")){
            //alert("computer wins");
            cscore=cscore+1; 
        }else{
            //alert("draw");
            draw=draw+1;

        }
        alert("user score "+uscore+", computer score "+cscore+", draw "+draw);
        console.log("user score "+uscore+", computer score "+cscore+", draw "+draw);
    }
    //alert("user score "+uscore+", computer score "+cscore+", draw "+draw);
    if(uscore>cscore){
        alert("User wins the game");
    }else{
        alert("Computer wins the game");
    }
    </script>

</head>