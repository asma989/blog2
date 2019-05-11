@extends('layout.app')
@section('content')
  
   
   
<!--inner block start here-->
                   <div  dir="rtl" lang="ar" class="alert alert-info" style="text-align: center;"><p><strong><i>
						                    استعراض الموظفين 
						      	<i><strong></p></div><br>
        <div dir="rtl" lang="ar" class="col-md-12 md-in" >
            <div class="list-group">
            
                <p class="list-group-item list-group-item-info">اسم الموظف:  راما نقاوة </p>
                <p class="list-group-item list-group-item-info"> المسمى الوظيفي:مدرب</p>
                <p class="list-group-item list-group-item-info">  تاريخ الانضمام:12/3/2009</p>
            </div>
        </div>
        
        <div class="row">
                   <div dir="rtl" lang="ar" class="col-md-12 md-in" >    <br> <br>						
                        <table class="table table-striped table-hover" >
                           <tr>
                              <th style=" background-color: #68AE00;text-align: center;padding: 8px;" > الدورات التي يدربها </th>

                           </tr>
                             
                           <tr>
                            <th style=" text-align: center;" >  <button type="button" class="button button4" data-toggle="modal" data-target="#my_Cours">محاسبة</button>  </th>
                            <th style=" text-align: center;" >  <button type="button" class="button button4" data-toggle="modal" data-target="#my_Cours">محاسبة</button>  </th>                           
                            <th style=" text-align: center;" >  <button type="button" class="button button4" data-toggle="modal" data-target="#my_Cours">محاسبة</button>  </th>   
                            <th style=" text-align: center;" >  <button type="button" class="button button4" data-toggle="modal" data-target="#my_Cours">محاسبة</button>  </th> 
                            <th style=" text-align: center;" >  <button type="button" class="button button4" data-toggle="modal" data-target="#my_Cours">محاسبة</button>  </th>                                          
                          </tr>                           
                       </table>
                    </div>
        </div> 

        <div class="row">
                   <div dir="rtl" lang="ar" class="col-md-12 md-in" >    <br> <br>						
                        <table class="table table-striped table-hover" >
                           <tr>
                              <th style=" background-color: #68AE00;text-align: center;padding: 8px;" >   أيام  الغياب  </th>

                           </tr>
                             
                           <tr>
                           <th style=" text-align: center;" >  الخميس 2/3/2015 </th>
                           <th style=" text-align: center;" >  الخميس 2/3/2015  </th>
                           <th style=" text-align: center;" >  الخميس 2/3/2015  </th>
                           <th style=" text-align: center;" >  الخميس 2/3/2015 </th>
                         </tr>

                         
                           
                       </table>
                    </div>
        </div>    


         <br><br><br><br> 


@include('model.my_Cours')

 @endsection             
						
