@extends('layout.app')
@section('content')

<div  dir="rtl" lang="ar" class="alert alert-info" style="text-align: center;"><p><strong><i>
                                                           وضع اسئلة اختبارات تحديد المستوى
                                  <i><strong></p></div><br>
 <div  dir="rtl" lang="ar" class="col-md-12 md-in" >                       
	<form action ="">
             <!-- dropdawnlist -->
                     <select>
                       <option value="">اختر المادة </option>
                       <option value="1">انكليزي</option>
                       <option value="2">محاسبة</option>
                     </select><br><br>
                      
                     <select>
                      <option value="">اختر المستوى </option>
                      <option value="1">أول</option>
                      <option value="2">ثاني</option>
                      <option value="3">ثالث</option>
                      <option value="4">لا يوجد</option>
                     </select>
             <!-- dropdawnlist -->
             <br><br>
             <div class="col-md-9 compose-right"><p dir="rtl" lang="ar" class="myfontd" > ملاحظة :الرجاء ادخال ثلاث اختيارات لكل سؤال  </p ></div> <br><br>
                                        <div> 
                                              <div id="input_Q">
                                              </div>
                                              <div class="col-md-9 compose-right"><p dir="rtl" lang="ar" class="myfontd" >       ادخل السؤال </p ></div> <br><br>

				                                <div class="col-md-9 compose-right">
	                                     	       <div>
		                                      	      <input type="text"  dir="rtl" lang="ar" id="َQ" name="Q[]" value="" placeholder=" ادخل السؤال">
		                                           </div>
	                                            </div>
                                                <div class="col-md-9 compose-right">
	                                     	       <div >
		                                      	     <input type="text"  dir="rtl" lang="ar" id="c1" name="c1[]" value="" placeholder="ادخل الاختيار الأول">
		                                           </div>
                                                </div>
                                                <div class="col-md-9 compose-right">
	                                     	         <div >
		                                            	<input type="text"  dir="rtl" lang="ar" id="c2" name="c2[]" value="" placeholder="  ادخل الاختيار الثاني  ">
		                                             </div>
	                                            </div>
											    <div class="col-md-9 compose-right">
	                                     	        <div >
		                                      	      <input type="text"  dir="rtl" lang="ar" id="c3" name="c3[]" value="" placeholder=" ادخل الاختيار الثالث ">
		                                            </div>
	                                            </div>
												<div class="col-md-9 compose-right">
	                                     	       <div >
		                                             	<input type="text"  dir="rtl" lang="ar" id="toption" name="toption[]" value="" placeholder="   ادخل لاختيار الصحيح  ">
		                                           </div>
	                                            </div>
												<div class="col-md-9 compose-right">
												    <div class="input-group-btn">
														<button class="btn btn-success" type="button"  onclick="input_Q();"><span class="glyphicon glyphicon-plus" aria-hidden="true">أنقر لإضافة سؤال جديد</span> </button>
													</div>
		                                        </div>
	                                   </div>
								       <div class="clear"></div>
                                                                        
                                   <br>   
                                   <div class="row">
                                   <div class="col-md-9 compose-left">  
                                        <input type="submit" value=" حفظ" > <br><br><br>
                                    </div>
                                  </div>
                                 
                                       
                                  
    </form>
    </div> 

<br>


<style>
 select {
    display: block;
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 700;
    color: #444;
    line-height: 1.3;
    padding: .6em 2.4em .5em .8em;
    width: 100%;
    max-width: 100%; 
    box-sizing: border-box;
    margin: 0;
    border: 1px solid #aaa;
    box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
    border-radius: .5em;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;
     background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'), 
      linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
    background-repeat: no-repeat, repeat;
    background-position: right .7em top 50%, 0 0;
    background-size: .65em auto, 100%;
 }
 .myfontd {
    border-right: 6px solid #68AE00;
    background-color: rgba(206, 250, 141, 0.712);
    font-family: verdana;
    font-size:100%;
    text-align:center;
  }

</style>



@endsection