@extends('layout.app')
@section('content')
  
<!--inner block start here-->
                   <div  dir="rtl" lang="ar" class="alert alert-info" style="text-align: center;"><p><strong><i>
						                 جدول تفييم الطلاب لمادة ال icdl 
						      	<i><strong></p></div>
                    <div class="row">
                        <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;font-size:130%;" ><strong><i>   التاريخ :<i><strong></p></div>
                         <div dir="rtl" lang="ar" class="col-md-12 compose-right" ><p  style="color:#4CAF50;font-size:130%;" ><strong><i>    12/8/2008<i><strong></p></div>
                      </div>
                      <br><br>
       <form >               
                      <div class="row">
                    <div dir="rtl" lang="ar" class="col-md-12 compose-right" >							
                        <table class="table table-striped table-hover" >
                           <tr>
                              <th style=" background-color: #68AE00;text-align: center;padding: 8px;" > اسم الطالب</th>
                              <th style=" background-color: #68AE00;text-align: center;padding: 8px;"> التقييم </th>
                              <th style=" background-color: #68AE00; text-align: center; padding: 8px;">  الوقت الأول </th>
                              <th style=" background-color: #68AE00; text-align: center; padding: 8px;">  الوقت الثاني </th>
                              <th style=" background-color: #68AE00; text-align: center; padding: 8px;">   التقييم الأولي </th>
                              <th style=" background-color: #68AE00; text-align: center; padding: 8px;">  التقييم المرحلي </th>
                              <th style=" background-color: #68AE00; text-align: center; padding: 8px;">  التقييم النهائي </th>

                           </tr>

                           <tr>
                            <th  style=" background-color:#e68a00;text-align: center;padding: 8px;"> طارق السكران </th>
                            <th  style=" background-color: #e68a00;text-align: center;padding: 8px;"> <input  dir="rtl" lang="ar" type="text"  value=""   size="3">  </th>
                            <th  style=" background-color: #e68a00;text-align: center;padding: 8px;"><input type="radio" name="time" value="v1"></th>
                            <th  style=" background-color:#e68a00;text-align: center;padding: 8px;"><input type="radio" name="time" value="v2"></th>
                            <th  style=" background-color: #e68a00;text-align: center;padding: 8px;"><input type="radio" name="marke" value="1"></th>
                            <th  style=" background-color: #e68a00;text-align: center;padding: 8px;"><input type="radio" name="marke" value="2"></th>
                            <th  style=" background-color: #e68a00;text-align: center;padding: 8px;"><input type="radio" name="marke" value="3"></th>
                           </tr>
                           
                        </table>
                       
                    </div>   
                </div> 
                     
                <input type="submit" value="إرسال " >            
       </form> 
         <br><br><br>

 @endsection             
						
