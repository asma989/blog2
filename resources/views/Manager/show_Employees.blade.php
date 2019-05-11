@extends('layout.app')
@section('content')
  
   
   
<!--inner block start here-->
                   <div  dir="rtl" lang="ar" class="alert alert-info" style="text-align: center;"><p><strong><i>
						                    استعراض الموظفين 
						      	<i><strong></p></div><br>


                        <div class="row">
                              <div class="row">
                              <div  dir="rtl" lang="ar" class="col-md-12 md-in" ><p  style="color:black;" ><strong><i>لإضافة موظف جديد اضغط على إضافة<i><strong></p></div>
                              </div>
                               <div  dir="rtl" lang="ar" class="col-md-8 md-in" >  <button type="button" class="button " data-toggle="modal" data-target="#Add_Emp">أضافة</button></div>
                      </div><br><br>

                      <div class="row">
                    <div dir="rtl" lang="ar" class="col-md-12 compose-right" >							
                        <table class="table table-striped table-hover" >
                           <tr>
                              <th style=" background-color: #68AE00;text-align: center;padding: 8px;" > اسم الموظف</th>
                              <th style=" background-color: #68AE00;text-align: center;padding: 8px;"> المسمى الوظيفي </th>
                              <th style=" background-color: #68AE00; text-align: center; padding: 8px;">    </th>
                              <th style=" background-color: #68AE00; text-align: center; padding: 8px;">  تاريخ الانضمام  </th>
                           </tr>
                              <th style=" text-align: center;" ><a href="Employees.html"> راما نقاوة</a>  </th>
                              <th style=" text-align: center;" > مدرب </th>
                              <th style=" text-align: center;" >   <button type="button" class="button button3" data-toggle="modal" data-target="#delet_mssg">حذف</button></th>
                              <th style=" text-align: center;" > 12/10/2016  </th>
                           <tr>
                            
 
                           </tr>
                           
                        </table>
                       
                    </div>   
                </div> 

         <br><br><br><br> <br><br> <br><br> <br><br>


 @include('model.delet_masseg') 
 @include('model.Add_Employee') 
 @endsection             
						
