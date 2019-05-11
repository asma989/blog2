@extends('layout.app')
@section('content')

                        <div  dir="rtl" lang="ar" class="alert alert-info"  style="	text-align:center;"><p><strong><i>
						            فتح دورة  
                            <i><strong></p></div> 
                            <br><br><br>                  
                       <!-- tabel -->
                       <table class="table table-striped table-hover" >
                           <tr>
                              <th style="text-align: center;">   </th>
                              <th colspan="2" style="text-align: center;"> الحالة </th>
                              <th style="text-align: center;">اسم الدورة</th>
                           </tr>
                           <tr>
                             <th style="text-align: center;">  <button type="button" class="button button2" data-toggle="modal" data-target="#myModal">تعديل</button> <button type="button" class="button button3" data-toggle="modal" data-target="#delet_mssg">حذف</button> </th>
                             <td style="text-align: center;">مفتوحة </td>
                             <td style="text-align: center;">مغلقة</td> 
                             <th style="text-align: center;"> حلاقة</th>
                           </tr>
                      </table>
                     
                     <!-- tabel -->
                     <div class="row">
                              <div class="row">
                              <div  dir="rtl" lang="ar" class="col-md-12 md-in" ><p  style="color:black;" ><strong><i>لفتح دورة جديدة للتسجيل عليها اضغط على إضافة<i><strong></p></div>
                              </div>
                               <div  dir="rtl" lang="ar" class="col-md-8 md-in" > <button type="button" class="button" data-toggle="modal" data-target="#add_to_open_cours">إضافة</button></div>
                      </div>
                      <br> <br> <br> <br><br><br><br>
                               
 @include('model.edit_course')
 @include('model.add_course_to_open')
 @include('model.delet_masseg')           
@endsection