var room = 1;
function input_Q() {
    room++;
var objTo = document.getElementById('input_Q')
var divtest = document.createElement("div");
divtest.setAttribute("class", "form-group removeclass"+room);
var rdiv = 'removeclass'+room;
divtest.innerHTML = '<div class="col-md-9 compose-right"><p dir="rtl" lang="ar" class="myfontd" >سؤال جديد </p ></div><br><div class="col-md-9 compose-right"><div><input type="text"  dir="rtl" lang="ar" id="Q" name="Q[]" value="" placeholder=" ادخل السؤال"></div></div><div class="col-md-9 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="c1" name="c1[]" value="" placeholder="   ادخل الاختيار الأول"></div></div><div class="col-md-9 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="c2" name="Quantity[]" value="" placeholder="  ادخل الاختيار الثاني  "></div></div><div class="col-md-9 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="c3" name="c3[]" value="" placeholder=" ادخل الاختيار الثالث "></div></div> <div class="col-md-9 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="toption" name="toption[]" value="" placeholder="  ادخل الاختيار الصحيح  "></div></div></div><br><div class="clear"></div>';

objTo.appendChild(divtest)
}
function remove_education_fields(rid) {
$('.removeclass'+rid).remove();
}