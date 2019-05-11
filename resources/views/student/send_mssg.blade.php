@extends('layout.app')
@section('content')


                        <div  dir="rtl" lang="ar" class="alert alert-info"><p style="text-align: center;"><strong><i>
							لطفا أدرج كل التفاصيل اللازمة لإرسال الرسالة
							<i><strong></p></div>
						
		<form class="com-mail">
                            <div class="row">
                                     <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i> إلى:<strong><i></p> <input  dir="rtl" lang="ar" type="text"  value="" >  </div>
                               </div>
                               <div class="row">
                                     <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i> الموضوع:<strong><i></p><input  dir="rtl" lang="ar" type="text"  value="" >  </div>
                               </div>

                               <div class="row">
                                         <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;" ><strong><i> الرسالة:<strong><i></p></div>
                                     </div>
                                     <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >   
						                   <textarea dir="rtl" lang="ar"  placeholder="" name="message"></textarea>
                                     </div>								
								
								<input type="submit" value="إرسال الرسالة" > 
		</form>
@endsection