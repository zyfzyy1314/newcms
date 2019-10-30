@extends('layouts.app')

@section('content')
<div class="container"">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="G20" data-toggle="tab" href="#tab_G20" role="tab" aria-controls="G20" aria-selected="true">
                G20
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="Americas" data-toggle="tab" href="#tab_Americas" role="tab" aria-controls="Americas" aria-selected="false">
                  Americas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="Europe" data-toggle="tab" href="#tab_Europe" role="tab" aria-controls="Europe" aria-selected="false">
                   Europe
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="Asia-Pacifi" data-toggle="tab" href="#tab_Asia-Pacifi" role="tab" aria-controls="Asia-Pacifi" aria-selected="false">
                    Asia-Pacific
               </a>
            </li>   
            <li class="nav-item">
               <a class="nav-link" id="Middle-East" data-toggle="tab" href="#Middle-East" role="tab" aria-controls="Middle-East" aria-selected="false">
                    Middle-East
               </a>
            </li> 
            <li class="nav-item"> 
               <a class="nav-link" id="Africa" data-toggle="tab" href="#tab_Africa" role="tab" aria-controls="tab_Africa" aria-selected="false">
                    Africa
               </a>
            </li>

          </ul>

          
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab_G20" role="tabpanel" >

                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Country/Region</th>
                                <th scope="col">Central Bank</th>
                                <th scope="col">Current Rate</th>
                                <th scope="col">Direction</th>
                                <th scope="col">Previous Rate</th>
                                <th scope="col">Last_Change</th>
                                <th scope="col">Next Meeting</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($group_twenty as $record)
                              <tr>
                                <td>{{$record->country}}</td>
                                <td>{{$record->bank_name}}</td>
                                <td>{{$record->current_rate}}</td>
                                <td>{{$record->direction}}</td>
                                <td>{{$record->previous_rate}}</td>
                                <td>{{$record->last_change}}</td>
                                <td>{{$record->next_meeting}}</td>
                              </tr>
                            @endforeach
                            </tbody>
                      </table>
            </div>


            <div class="tab-pane" id="tab_Americas" role="tabpanel">

                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Country/Region</th>
                                <th scope="col">Name of interest rate</th>
                                <th scope="col">Current Rate</th>
                                <th scope="col">Last_Change</th>
                                <th scope="col">Next Meeting</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($americas as $record)
                              <tr>
                                <td>{{$record->country}}</td>
                                <td>{{$record->bank_name}}</td>
                                <td>{{$record->current_rate}}</td>
                                <td>{{$record->last_change}}</td>
                                <td>{{$record->next_meeting}}</td>
                              </tr>
                            @endforeach
                            </tbody>
                      </table>

            </div>
            <div class="tab-pane fade" id="tab_Europe" role="tabpanel" >
                    
                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Country/Region</th>
                                <th scope="col">Name of interest rate</th>
                                <th scope="col">Current Rate</th>
                                <th scope="col">Last_Change</th>
                                <th scope="col">Next Meeting</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($europe as $record)
                              <tr>
                                <td>{{$record->country}}</td>
                                <td>{{$record->bank_name}}</td>
                                <td>{{$record->current_rate}}</td>
                                <td>{{$record->last_change}}</td>
                                <td>{{$record->next_meeting}}</td>
                              </tr>
                            @endforeach
                            </tbody>
                      </table>        

            </div>
            <div class="tab-pane fade" id="tab_Asia-Pacifi" role="tabpanel">
                
                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Country/Region</th>
                                <th scope="col">Name of interest rate</th>
                                <th scope="col">Current Rate</th>
                                <th scope="col">Last_Change</th>
                                <th scope="col">Next Meeting</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($asia_pacific as $record)
                              <tr>
                                <td>{{$record->country}}</td>
                                <td>{{$record->bank_name}}</td>
                                <td>{{$record->current_rate}}</td>
                                <td>{{$record->last_change}}</td>
                                <td>{{$record->next_meeting}}</td>
                              </tr>
                            @endforeach
                            </tbody>
                      </table>     
                
            </div>
            <div class="tab-pane fade" id="tab_Middle-East" role="tabpanel">

                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Country/Region</th>
                                <th scope="col">Name of interest rate</th>
                                <th scope="col">Current Rate</th>
                                <th scope="col">Last_Change</th>
                                <th scope="col">Next Meeting</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($middle_east as $record)
                              <tr>
                                <td>{{$record->country}}</td>
                                <td>{{$record->bank_name}}</td>
                                <td>{{$record->current_rate}}</td>
                                <td>{{$record->last_change}}</td>
                                <td>{{$record->next_meeting}}</td>
                              </tr>
                            @endforeach
                            </tbody>
                      </table>  

            </div>
            <div class="tab-pane fade" id="tab_Africa" role="tabpanel">
              
                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Country/Region</th>
                                <th scope="col">Name of interest rate</th>
                                <th scope="col">Current Rate</th>
                                <th scope="col">Last_Change</th>
                                <th scope="col">Next Meeting</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($africa as $record)
                              <tr>
                                <td>{{$record->country}}</td>
                                <td>{{$record->bank_name}}</td>
                                <td>{{$record->current_rate}}</td>
                                <td>{{$record->last_change}}</td>
                                <td>{{$record->next_meeting}}</td>
                              </tr>
                            @endforeach
                            </tbody>
                      </table>                

            </div>
       
 </div>




    </div>
@endsection
