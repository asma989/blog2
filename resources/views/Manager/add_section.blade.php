@extends('layout.app')
@section('content')
<!--inner block start here-->
<div class="inner-block">       
    	 	<div class="col-md-12 compose-right">
				
						<div class="inbox-details-body">

                  <div class="row">
                   <div dir="rtl" lang="ar" class="col-md-12 compose-right">
                       <div class="row">
                           <div dir="rtl" lang="ar" class="col-md-12 md-in"   ><p  style="color:#4CAF50;" ><strong><i>     اسم القسم<i><strong></p></div>
                        </div>
                        <div class="row">
                         <div dir="rtl" lang="ar" class="col-md-12 md-in" > <input  dir="rtl" lang="ar" type="text"  value="" ></div>
                        </div>
                        <div class="row">
                          <div dir="rtl" lang="ar" class="col-md-2 md-in" ><button type="button" class="button " >إضافة</button></div>
                        </div> 
                   </div>
               </div>
             <br>
                                        
                       <!-- tabel -->

                       <table class="table table-striped table-hover">
                           <tr>
                              <th>   </th>
                              <th>اسم القسم</th>
                           </tr>
                           <tr>
                             <th>  <button type="button" class="button button2" data-toggle="modal" data-target="#myModal">تعديل</button> <button class="button button3">حذف</button> </th>
                             <th> مهني</th>
                           </tr>
                           <tr>
                              <th>  <button type="button" class="button button2" data-toggle="modal" data-target="#myModal">تعديل</button> <button class="button button3">حذف</button> </th>
                              <th> انشطة</th>
                           </tr>
                      </table>
                     <!-- tabel -->
						
            </div> <!-- inbox ditail body -->

			  </div>  <!--col md 12 -->

</div> <!-- inner block-->

 <div class="clearfix"> </div> 
</div>
<!--inner block end here-->


 @include('model.model_section')
               
@endsection