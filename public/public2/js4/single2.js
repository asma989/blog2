var room = 1;
function requirements_fields() {
                                              room++;
 var objTo = document.getElementById('requirements_fields')
 var divtest = document.createElement("div");
  divtest.setAttribute("class", "form-group removeclass"+room);
   var rdiv = 'removeclass'+room;
divtest.innerHTML = '<div class="col-md-8 compose-right"><p dir="rtl" lang="ar" class="myfontd" > فرد جديد  </p ></div><div class="col-md-8 compose-right"><div><input type="text"  dir="rtl" lang="ar" id="number" name="number[]" value="" placeholder=" الاسم الثلاثي"></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Category" name="Category[]" value="" placeholder="  تاريخ الولادة"></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Quantity" name="Quantity[]" value="" placeholder="  صلة القرابة  "></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Notes" name="Notes[]" value="" placeholder=" الحالة "></div></div> <div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Approximateprice" name="Approximateprice[]" value="" placeholder="  العمل  "></div></div></div><br><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Approximateprice" name="Approximateprice[]" value="" placeholder="  رقم الهاتف الموبايل  "></div></div></div><br><div class="clear"></div>';

objTo.appendChild(divtest)
}	