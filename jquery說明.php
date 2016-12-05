<script type="text/javascript" >


//$(CSS運算式) 找出div id 底下的第一個<p>
$("div#id>P:first")

//$(html/elements) 找出div 
$('div')

//找出input:type為id name="name"
$('input:type#id[name="name"]')

//找出第一個elements
&("elements").eq(0)

//找出第一個elements 取消目前的jQuery object 回傳&(elements)的jQuery object
&("elements").eq(0).end()

//找出input:type為id name="name" 並foreach出來
$('input:type#id[name="name"]').each()

//找出from 底下全部的input
$("form input")

//找出from底下的子input 只到第一層 不再往下找 $("form input")會往下找
$("form > input")

//找出全部div後的img
$("div + img")

//找出全部div同級的img
$("div ~ img")

//找出第一個div底下同級的p
$("div:eq(1) ~ p")

//找出div底下第一、二、最後的元素
$("div:first")
$("div:eq(2)")
$("div:last")

//找出含有123的文字的dd 找文字
$("dd:contains('123')")

//找出包含img的a 找元素
$("a:has(img)")

//隱藏p
$("p").hide();	

//找出隱藏的p 顯示出來
$("p:hidden").show();

//找出可見的p
$("p:visible")

//找出每個p底下的第一個元素
$("p:first-child")

//找出每個p底下的最後一個元素
$("p:last-child")

//找出p底下的第一個元素
$("p:nth-child(1)")

//找出p底下的第二個元素 即其每間隔兩個的元素
$("p:nth-child(2m)")

//找出id 禁用 可用 點選 選擇
$("#test :disabled").val("不可用");
$("#test :enabled").val("可用");
$("#test :checked").removeAttr("checked");
$("#test :selected").removeAttr("selected");

//字首 字尾
$("input:text[name^='123']")
$("input:text[name$='123']")
 
//tr 偶數 奇數 第三 小於2的索引 大於2的索引
$("tr:even")
$("tr:odd")
$("tr:eq(3)")
$("tr:lt(2)")
$("tr:gt(2)")

//找出底下的class 
$(this).hasClass("red")

//找出div底下所有red class
$("div").filter(".red")

//找出p底下 第二個span
$("p").filter(function(index) {
	  	return $("span", this).length == 2;//回傳ture or false 決定此元素是否執行
}).css("background-color","red");

//判斷底下是否有p
$("div").has("p")











</script>
<?php





?>