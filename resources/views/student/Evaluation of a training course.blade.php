@extends('layout.app')
@section('content')
<!--inner block start here-->
 
<div  dir="rtl" lang="ar" class="alert alert-info"><p style="text-align: center;"><strong><i>
							استمارة تقييم دورة تدريبية
							<i><strong></p></div>
               <form action ="">
                               <div class="row">
                                     <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i> اسم الدورة التدريبية:<i><strong></p>  <input  dir="rtl" lang="ar" type="text"  value="" >  </div>
                               </div>
                               <div class="row">
                                     <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i>   اسم المدرب|ة:<i><strong></p>  <input  dir="rtl" lang="ar" type="text"  value="" >  </div>
                               </div>
                               
                                <div class="row">
                                     <div dir="rtl" lang="ar" class="col-md-12 compose-right" >  <p  style="color:#4CAF50;" ><strong><i>تاريخ بدء الدورة<i><strong></p><input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div> 
                                </div>  <br>
                                <div class="row">
                                     <div dir="rtl" lang="ar" class="col-md-12 compose-right" >  <p  style="color:#4CAF50;" ><strong><i>تاريخ انتهاء الدورة<i><strong></p><input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div> 
                                </div>  <br>
                                <div class="row">
                                  <div dir="rtl" lang="ar" class="col-md-12 compose-right" >							
									<table class="table table-striped table-hover">
                                        
										<tr >
											<th  style=" background-color: #68AE00;text-align: right;" >المادة التدريبية  </th>
											
										</tr>
										<tr>
                                            <th style="text-align: right;" >تقييم المادة التدريبية </th>
											<th > ممتاز <input  type="radio" name="q1" value="0"></th>
											<th >جيد  <input   type="radio" name="q1" value="1"></th>
                                            <th >مقبول <input   type="radio" name="q1" value="2"> </th>
                                            <th >سيء <input   type="radio" name="q1" value="3"> </th>
										</tr>
										<tr>
                                            <th style="text-align: right;" >الفترة الزمنية للدورة</th>
                                            <th >كافية <input   type="radio" name="q2" value="0"></th>
											<th >   غير كافية<input  type="radio" name="q2" value="1"></th>
                                            <th > لا بأس <input   type="radio" name="q2" value="2"> </th>
                                            <th >  أطول من اللازم<input   type="radio" name="q2" value="3"> </th>
										</tr>
										<tr>
                                             <th style="text-align: right;" >اتاحة الوقت للتطبيق العملي في الدورة</th>
                                             <th >كافي <input   type="radio" name="q2" value="0"></th>
											 <th >   غير كافي<input  type="radio" name="q2" value="1"></th>
                                             <th > لا بأس <input   type="radio" name="q2" value="2"> </th>
                                             <th >  أطول من اللازم<input   type="radio" name="q2" value="3"> </th>
										</tr>
										<tr>
                                            <th style="text-align: right;" >قاعة التدريب   </th>
                                            <th > ممتاز <input  type="radio" name="q1" value="0"></th>
											<th >جيد  <input   type="radio" name="q1" value="1"></th>
                                            <th >مقبول <input   type="radio" name="q1" value="2"> </th>
                                            <th >سيء <input   type="radio" name="q1" value="3"> </th>
                                      </tr>
                                      <tr>
                                            <th style="text-align: right;" >الادوات و التقنيات والتجهيزات التدريبية المستخدمة     </th>
                                            <th> ممتاز <input  type="radio" name="q1" value="0"></th>
											<th>جيد  <input   type="radio" name="q1" value="1"></th>
                                            <th>مقبول <input   type="radio" name="q1" value="2"> </th>
                                            <th>سيء <input   type="radio" name="q1" value="3"> </th>
									  </tr>
                                    </table class="table table-striped table-hover">
                                  </div>  
                                </div>    
                                     <br>
                                     <div class="row">
                                         <div dir="rtl" lang="ar" class="col-md-12 compose-right" >
                                              <p  style="color:#4CAF50;" ><strong><i>   هل يمكن الاستفادة مما تعلمته من الدورة في حياتك ؟يرجى شرح ذلك<i><strong></p><input dir="rtl" lang="ar"  type="radio" name="" value="0"> نعم <input  dir="rtl" lang="ar"  type="radio" name="q13" value="1"> لا 
                                         </div>
                                     </div>
                                     <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >   
						                   <textarea dir="rtl" lang="ar"  placeholder="الوصف" name="message"></textarea>
                                     </div>
                                <br> 
                                <div class="row">
                                         <div dir="rtl" lang="ar" class="col-md-12 compose-right" >
                                              <p  style="color:#4CAF50;" ><strong><i>هل هناك موضوعات لم ترد في الدورة تعتقد أنه يجب أن تضاف على المادة التدريبية في الدورات المستقبلية؟يرجى شرح ذلك  <i><strong></p><input dir="rtl" lang="ar"  type="radio" name="" value="0"> نعم <input  dir="rtl" lang="ar"  type="radio" name="q13" value="1"> لا 
                                         </div>
                                     </div>
                                     <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >   
						                   <textarea dir="rtl" lang="ar"  placeholder="الوصف" name="message"></textarea>
                                     </div>
                             <div class="row">
                               <div dir="rtl" lang="ar" class="col-md-12 compose-right" >         
                                 <table class="table table-striped table-hover">
                                        
                                        
                                         <tr >
											<th dir="rtl" lang="ar" style=" background-color: #68AE00;text-align: right;"> المدرب  </th>
											
										</tr>
										<tr>
                                             <th style="text-align: right;" >  الالتزام بمواعيد الجلسات </th>
											<th > ممتاز <input  type="radio" name="q1" value="0"></th>
											<th >جيد  <input   type="radio" name="q1" value="1"></th>
                                            <th >مقبول <input   type="radio" name="q1" value="2"> </th>
                                            <th >سيء <input   type="radio" name="q1" value="3"> </th>
										</tr>
										<tr>
                                        <th style="text-align: right;" >   توضيح محاور الدورة وتطبيقها</th>
											<th > ممتاز <input  type="radio" name="q1" value="0"></th>
											<th >جيد  <input   type="radio" name="q1" value="1"></th>
                                            <th>مقبول <input   type="radio" name="q1" value="2"> </th>
                                            <th >سيء <input   type="radio" name="q1" value="3"> </th>
										</tr>
										<tr>
                                            <th style="text-align: right;" >     الالمام بالجانب النظري و تطبيقها</th>
                                             <th > ممتاز <input  type="radio" name="q1" value="0"></th>
											<th >جيد  <input   type="radio" name="q1" value="1"></th>
                                            <th >مقبول <input   type="radio" name="q1" value="2"> </th>
                                            <th >سيء <input   type="radio" name="q1" value="3"> </th>
										</tr>
										<tr>
                                            <th style="text-align: right;" >  القدرة على توصيل المعلومات   </th>
                                            <th > ممتاز <input  type="radio" name="q1" value="0"></th>
											<th >جيد  <input   type="radio" name="q1" value="1"></th>
                                            <th >مقبول <input   type="radio" name="q1" value="2"> </th>
                                            <th >سيء <input   type="radio" name="q1" value="3"> </th>
                                      </tr>
                                      <tr>
                                      <th style="text-align: right;" >     القدرةعلى استخدام وسائل الإيضاح الملائمة لموضوع التدريب</td>
                                            <th > ممتاز <input  type="radio" name="q1" value="0"></th>
											<th >جيد  <input   type="radio" name="q1" value="1"></th>
                                            <th >مقبول <input   type="radio" name="q1" value="2"> </th>
                                            <th >سيء <input   type="radio" name="q1" value="3"> </th>
									  </tr>
                                      <tr>
                                      <th style="text-align: right;" >    القدرةعلى النقاش والتفاعل مع المتدربين  و الاجابة على اسئلتهم</td>
                                            <th > ممتاز <input  type="radio" name="q1" value="0"></th>
											<th >جيد  <input   type="radio" name="q1" value="1"></th>
                                            <th >مقبول <input   type="radio" name="q1" value="2"> </th>
                                            <th >سيء <input   type="radio" name="q1" value="3"> </th>
									  </tr>
                                    </table>
                                    <br>
                               </div>      
                            </div>
                            <div class="row">
                                 <div dir="rtl" lang="ar" class="col-md-12 md-in"   ><p  style="color:#4CAF50;" ><strong><i>ملاحظات أخرى تتعلق بالأداء التدريبي؟<i><strong></p></div>
                            </div>
                            <div class="row">
                               <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >   
						         <textarea dir="rtl" lang="ar"  placeholder="" name="message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                 <div dir="rtl" lang="ar" class="col-md-12 md-in"   ><p  style="color:#4CAF50;" ><strong><i>ملاحظات إضافية :(أي ملاحظات تود أن تضيفها)<i><strong></p></div>
                            </div>
                            <div class="row">
                               <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >   
						         <textarea dir="rtl" lang="ar"  placeholder="" name="message"></textarea>
                                </div>
                            </div>
                        
								<input type="submit" value="إرسال " > 
			   </form>    
@endsection