@extends('layout.app')
@section('content')
<!--inner block start here-->

                <div  dir="rtl" lang="ar" class="alert alert-info" style="text-align: center;"><p><strong><i>
						                طلب شراء داخلي
						      	<i><strong></p></div>
                        
						<form action ="">




                               <div class="row">
                                     <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i>  الرقم :<i><strong></p>  <input  dir="rtl" lang="ar" type="text"  value="" >  </div>
                               </div>
                        <div class="row">

                        <div class="row">
                            <div dir="rtl" lang="ar" class="col-md-12 compose-right" >  <p  style="color:#4CAF50;" ><strong><i>التاريخ:  <i><strong></p><input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div> 
                                </div>                        
                        </div> 
                        <br>
                        <div class="row">
                            <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i>  الجهة الطالبة :<i><strong></p>  <input  dir="rtl" lang="ar" type="text"  value="" >  </div>
                         </div>       
                         <div class="row">
                            <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i>  الطلب لأجل :<i><strong></p>  <input  dir="rtl" lang="ar" type="text"  value="" >  </div>
                         </div>                         
                         <div class="row">
                            <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i>   بند الموازنة :<i><strong></p>  <input  dir="rtl" lang="ar" type="text"  value="" >  </div>
                         </div> 
                         <div class="row">
                            <div dir="rtl" lang="ar" class="col-md-12 compose-right" >  <p  style="color:#4CAF50;" ><strong><i>أقصى مدرة لتوريد المتطلبات:  <i><strong></p><input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div>                        
                        </div> 
                        <br>
                        <br>
                        <p   dir="rtl" lang="ar" style="color:#4CAF50;" ><strong><i>   المطلوب شراء الأصناف المبينة أدناه:<i><strong></p>
                        <br>
                        <!-- ////////////////////////////////////////////-->
                                  <div>
                                        <div id="requirements_fields">
          
				                              </div>
													<div class="col-md-8 compose-right"><p dir="rtl" lang="ar" class="myfontd" > المتطلبات </p ></div>
				                             <div class="col-md-8 compose-right">
	                                     	<div>
		                                      	<input type="text"  dir="rtl" lang="ar" id="number" name="number[]" value="" placeholder=" الرقم">
		                                    </div>
	                                   </div>
                                     <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Category" name="Category[]" value="" placeholder="  اسم الصنف-البيان">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Quantity" name="Quantity[]" value="" placeholder="  الكمية  ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Notes" name="Notes[]" value="" placeholder=" الملاحظات ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Approximateprice" name="Approximateprice[]" value="" placeholder=" سعر تقريبي  ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
																						<div class="input-group-btn">
                                             
																					 <button class="btn btn-success" type="button"  onclick="requirements_fields();"><span class="glyphicon glyphicon-plus" aria-hidden="true">أنقر لإضافة متطلب جديد</span> </button>
                  
																						 </div>
                                             <br>
		                                    </div>
	                                </div>
                                     
																		 <div class="clear"></div>
                                     <script src="{{asset('public2/js4/course_requirement_form.js')}}"></script>

																     <div class="row">
                                         <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i>       منظم الطلب :<i><strong></p>  <input  dir="rtl" lang="ar" type="text"  value="" >  </div>
                                     </div> 
                           
																     <div class="row">
                                         <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i>       المسمى  الوظيفي :<i><strong></p>  <input  dir="rtl" lang="ar" type="text"  value="" >  </div>
                                     </div>                        
                                     
                                        <br>
                                        <div class="row">
                                          <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i>         اسم المورد :<i><strong></p>  <input  dir="rtl" lang="ar" type="text"  value="" >  </div>
                                        </div>  
                                   <input type="submit" value="إرسال " >
                                    <br>
                  
                               
                        </form>



<style>
 .myfontd {
    border-right: 6px solid #68AE00;
    background-color: rgba(206, 250, 141, 0.712);
    font-family: verdana;
    font-size:150%;
    text-align:center;
  }
</style>
				
@endsection
                      
						
