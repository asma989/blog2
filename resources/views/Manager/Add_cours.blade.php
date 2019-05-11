@extends('layout.app')
@section('content')

                        <div  dir="rtl" lang="ar" class="alert alert-info"  style="	text-align:center;"><p><strong><i>
						                        إضافة دورة  
                            <i><strong></p></div>  
                            <br> <br>  
                 <div class="row">
                   <div dir="rtl" lang="ar" class="col-md-12 compose-right">
                       <div class="row">
                           <div dir="rtl" lang="ar" class="col-md-12 md-in"   ><p  style="color:#4CAF50;" ><strong><i>     اسم الدورة<i><strong></p></div>
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
                              <th style="text-align: center;">اسم الدورة</th>
                           </tr>
                           <tr>
                             <th  style="text-align: center;">  <button type="button" class="button button2" data-toggle="modal" data-target="#myModal">تعديل</button> <button type="button" class="button button3" data-toggle="modal" data-target="#delet_mssg">حذف</button> </th>
                             <th style="text-align: center;"> حلاقة</th>
                           </tr>
                      </table>
                    <br> <br> <br> <br>
                     <!-- tabel -->

 @include('model.the_model')
 @include('model.delet_masseg')                 
@endsection