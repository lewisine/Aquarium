//第ㄧ層
var rootn=new Array("Company","Product","Contact") //把第一層名稱寫這這陣列裡 此例有3個
var rootnlink=new Array();
//把第一層連結寫這這裡
rootnlink[0]="company.html"
rootnlink[1]="product.html"
rootnlink[2]="contact.html"
//如要新增 rootnlink[編號]="連結"

///第二層
var sub0 = new Array("History","VIsion");   //第二層的次頁面
var sub1 = new Array("prd1","prd2","prd3","prd4");  
var sub2 = new Array("Contact info","Location");    
//如要新增 var sub編號 = new Array("位置1","位置2"); 
var suball=new Array(sub0,sub1,sub2); //如要新增將sub往後增加
//HOME的連結先寫入echohome變數
echohome="<a href=\"menu.html\">Home</a> &rsaquo; ";
//就是由此函式套用到網頁
function showNav(num,subnum,cusloc){
 if(cusloc==null){
  showtxt=echohome+"<a href="+rootnlink[num]+">"+rootn[num]+"</a> &rsaquo; "+suball[num][subnum];
 }else if(cusloc==""){
  showtxt=echohome+rootn[num];
 }else{
  showtxt=echohome+"<a href="+rootnlink[num]+">"+rootn[num]+"</a> &rsaquo; "+cusloc;
 }
 document.write(showtxt);
}
