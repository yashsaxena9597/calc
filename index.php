<!DOCTYPE html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<title>Calculator</title>
<style >
  .output{
    width:90%;
    height:8vh;
    background-color:white!important; 
  }
  .out{
    width:90%;
    height:2vh;
    background-color:white!important; 
  }
  .previousoperand{
    height: 50%;
  }
  .currentoperand{
    height: 50%;
  }
  
</style>
</head>
<body>
	<div >
	<div class="container" style="width:25vh;height: auto; text-align: center; margin-top:20vh;margin-left: 70vh;">
	<div class="card"  style="width:auto; border: 1px solid black;background-color: gray;  ">
 		<h5 class="card-title " style="text-align: center; ">Calculator</h5>

  <div class="card-body" style=" text-align: center; width: auto;background-color:lightgray;">
   <div >
    <input type="text" name="disp" class="out" id="op" disabled="yes">
    <input type="text" name="disp" class="output" id="res" disabled="yess">
     </div>
  <table class="table" style="padding: 10%;">
  <thead>
    <tr><button type="button" onclick="cleardata()"  style="width: 100%;margin-top: 2%;text-align: center;"  >AC</button></tr>
    <tr>
      <th ><button type="button" onclick="calculate('7')"  >7</button></th>
      <th ><button type="button" onclick="calculate('8')" >8</button></th>
      <th ><button type="button" onclick="calculate('9') " >9</button></th>
      <th ><button type="button" onclick="operation('*')  " >*</button></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th ><button type="button" onclick="calculate('4')" >4</button></th>
      <td><button type="button" onclick="calculate('5') " >5</button></td>
      <td><button type="button" onclick="calculate('6') " >6</button></td>
      <td><button type="button" onclick="operation('/') ">/</button></td>
    </tr>
    <tr>
      <th ><button type="button" onclick="calculate('1')">1</button></th>
      <td><button type="button" onclick="calculate('2') " >2</button></td>
      <td><button type="button" onclick="calculate('3') " >3</button></td>
      <td><button type="button" onclick="operation('-') ">-</button></td>
    </tr>
    <tr>
      <th ><button type="button" onclick="calculate('0')">0</button></th>
      <td><button type="button" onclick="calculate('.') ">.</button></td>
      <td><button type="button" onclick="operation('=') ">=</button></td>
      <td><button type="button" onclick="operation('+') ">+</button></td>
    </tr>
  </tbody>        
</table>
  </div>
            
    
  
</div>
		
	</div></div></div>
 <script >
var displayval="";
var preval="";
var opt='+';
var result=0;
function cleardata(){

	opt='+';
	result=0;
	displayval=0;
	preval=0;
	document.getElementById("res").value =result;
	document.getElementById("op").value ='';
}
function calculate(oper){
	displayval+=oper;
	document.getElementById("res").value = displayval;
   

}
function operation(operator){
   
    preval=result;
	document.getElementById("op").value=operator;
	$.ajax({
        url:"cal.php",
        type:"POST",
        
        data:{oper:opt,preval: preval, display: displayval},
       
        success:function(res){
            result=res;
            document.getElementById("res").value=res;
           
        }
    })
	
	
	displayval=0;
	preval=result;
	opt=operator;
}


</script>
	
</body>
</html>