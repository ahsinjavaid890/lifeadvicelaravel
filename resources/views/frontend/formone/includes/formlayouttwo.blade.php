<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayouttwo.css')}}">
<script>
   var SliderValues = [100000, 150000, 200000, 250000, 300000];
   
   var iValue = SliderValues.indexOf(SliderValues[0]);
   $(function () {
       $("#sum_slider").slider({
           range: "min",
           min: 0,
           max: SliderValues.length - 1,
           step: 1,
           value: iValue,
           slide: function (event, ui) {
               $('#coverage_amount').text(SliderValues[ui.value]);
               //alert(SliderValues.length);
                   for (i = 0; i < SliderValues.length; i++) {
                   var group = SliderValues[i];
                   $('.coverage-amt-'+group).hide();
                   }
               $('.coverage-amt-'+SliderValues[ui.value]).show();
               $( "#coverage_amount" ).val( "$" + SliderValues[ui.value] );
               $( "#sum_insured2").val(SliderValues[ui.value]);
           }
       });
   
   });
     
</script>
<section style="background: linear-gradient( rgba(162, 44, 44, 0.3), rgba(82, 82, 82, 0.3) ), url('{{ asset('public/front/bgs/8.jpg') }}'); background-size: cover; background-position: 50% 50%; padding:50px 0px;">
   <div class="container">
      <div class="row birthdate">
         <div class="col-md-2 hidden-xs"></div>
         <div class="col-md-8 visa-insurance" style="padding-top: 10px;padding-bottom: 20px;background:rgba(0,0,0,0.7);padding-left: 0;padding-right: 0;">
            <div class="clearfix"></div>
            <div class="col-md-12 text-center" style="padding: 20px 0;">
               <h1 style="font-weight:bold;margin: 0px;color: #FFF;font-size: 38px;"><strong>{{ $data->pro_name }}</strong></h1>
               <h2 style="margin: 0px;font-size: 16px;line-height: normal;color:#FFF;">To start, we have a few quick questions to understand your needs.</h2>
            </div>
            <script type="text/javascript">
               jQuery(document).ready(function($){
                   $("#dh-get-quote").validate();
                   /*$("#dh-get-quote").on("submit",function(){
                       $("#dh-get-quote").validate();
                   })*/
                   
               });
            </script>
         <form action="{{ url('quotes') }}" method="post" class=" form form-layout1" role="form" id="dh-get-quote">
            @csrf
            <input type="hidden" name="product_id" value="{{ $data->pro_id }}">               
            <style>
                  #primary_destination{
                  overflow-y: scroll;
                  }
                  #primary_destination_child{
                  overflow-y: scroll;
                  }
                  .ui-datepicker-header{
                  margin: -11px 0 0px;
                  }
                  .input-group {
                  width: 100%;
                  }
                  .input-group .form-control{
                  z-index: -1;
                  position: initial;
                  }
               </style>
               @if($fields['sum_insured'] == 'on')
               <div id="sum_insured2">
                  <div class="col-md-12 col-sm-12 col-xs-12 control-label " style="text-align: left;">
                     <h4 class="coverage" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left; color:#FFF;">Coverage: <input type="text" id="coverage_amount" name="coverage_amount" style="border:0 !important; font-size:23px; color:#1BBC9B; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: left;width: 150px;" value="$"></h4>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
                     <div id="sum_slider" style="padding: 5px;border: none; background:#FFF;" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                        <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div>
                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                     </div>
                     <input type="hidden" id="sum_insured2" name="sum_insured2" value="100000">
                     <input name="sum_insured" value="" type="hidden" id="hidden_sum_insured">
                  </div>
               </div> 
            @endif
               <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                  <label class="input-label">Primary destination in Canada </label> 
                  @if(isset($fields['Country']))
                        @if($fields['Country'] == "on" )
                           @if($data->pro_travel_destination == 'worldwide')
                            <script>
                              function CountryState(evt) {
                                  if(evt.value=="Canada")
                                  {
                                      jQuery("#primary_destination_State_div").show();
                                      jQuery("#usa_stop_div").hide();
                                  }else if(evt.value=="United States")
                                  {
                                      jQuery("#primary_destination_State_div").hide();
                                      jQuery("#usa_stop_div").hide();
                                 }else
                                 {
                                     jQuery("#primary_destination_State_div").hide();
                                      jQuery("#usa_stop_div").show();
                                 }
                              }
                           </script>
                  <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" required="">
                     @foreach(DB::table('countries')->get() as $r)
                              <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                           @endforeach
                  </select>
                  <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" required="">
                     <option value=""> --- Primary destination in Canada ---</option>
                     @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                     <option value="{{ $r->name }}">{{ $r->name }}</option>
                     @endforeach
                  </select>
                  <div id="usa_stop_div" style="display:none;">
                     <div class="col-md-12">
                        <select name="usa_stop" id="usa_stop" aria-invalid="false" class="form-control" required>
                        <?php  for($i=0;$i<=$allow_input_field['us_stop_days'];$i++): 
                           if($allow_input_field['us_stop_days'] == 0 ):
                            echo "<option selected='' value='0'>None</option>";
                            else:
                            echo  "<option value='$i'>$i days</option>";
                            endif;  
                           
                           endfor; ?>
                        </select>
                     </div>
                  </div>
                  @else
                  <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" required="">
                        <option value=""> --- Primary destination in Canada ---</option>
                        @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                           <option value="{{ $r->name }}">{{ $r->name }}</option>
                        @endforeach
                     </select>
                  @endif
                  @endif
                  @endif
               </div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="departure_date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
             @if($fields['sdate'] == "on" && $fields['edate'] == "on")

                 <div class="col-md-6 col-sm-6 col-xs-12 control-input">
                  <label class="input-label"> Start Date</label>
                  <input id="departure_date" autocomplete="off" name="departure_date" value="" class="form-control hasDatepicker" type="text" placeholder="Start Date" required="" onchange="supervisayes()">
                  <!-- <script>
                     $('#departure_date').datepicker({
                     format: 'yyyy-mm-dd',
                     todayHighlight:'TRUE',
                     autoclose: true,
                     });
                  </script> -->
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 control-input">
                  <label class="input-label">End Date</label>
                  <input autocomplete="off" id="return_date" name="return_date" class="form-control" value="" type="text" required="" readonly="true">
               </div>
                        @endif
                        @if($fields['traveller'] == 'on')
                  <div class="col-md-6 col-sm-6 col-xs-12 control-input">
                     <label class="input-label">Number of travellers </label>
                     <select name="number_travelers" class="form-control form-select" id="number_travelers" autocomplete="off" placeholder="" required="" onchange="checknumtravellers()">
                        <option value="">Number of travellers</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                     </select>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 cont rol-input" id="traveller_1" style="">
                     <label class="input-label">Age of the oldest Traveller</label>
                     <div class="date-wrapper question-answer   date_of_birth">
                        <input type="text" placeholder="DD" id="days_1" name="days[]" maxlength="2" value="" class="numeric lpad2 day-holder">/
                        <input type="text" placeholder="MM" id="months_1" name="months[]" maxlength="2" value="" class="numeric lpad2 month-holder">/
                        <select name="years[]" id="add_1" class="numeric lpadyear year-holder holders" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                           <option value="">Year</option>
                           @for($i=1919; $i < 1982; $i++)
                           <option value="{{ $i }}">{{ $i }}</option>
                           @endfor
                        </select>
                     </div>
                  </div>
                  <input type="hidden" name="ages[]" id="age_1" value="">
                  <div class="col-md-6 col-sm-6 col-xs-12 control-input" id="traveller_2" style="display: none">
                     <label class="input-label">Age of the second Traveller</label>
                     <div class="date-wrapper question-answer   date_of_birth">
                        <input type="text" placeholder="DD" id="days_2" name="days[]" maxlength="2" value="" class="numeric lpad2 day-holder">/
                        <input type="text" placeholder="MM" id="months_2" name="months[]" maxlength="2" value="" class="numeric lpad2 month-holder">/
                        <select name="years[]" id="add_2" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                           <option value="">Year</option>
                           @for($i=1919; $i < 1982; $i++)
                           <option value="{{ $i }}">{{ $i }}</option>
                           @endfor
                        </select>
                     </div>
                  </div>
                  <input type="hidden" name="ages[]" id="age_2" value="">
                  <div class="col-md-6 col-sm-6 col-xs-12 control-input" id="traveller_3" style="display: none">
                     <label class="input-label">Age of the third Traveller</label>
                     <div class="date-wrapper question-answer   date_of_birth">
                        <input type="text" placeholder="DD" id="days_3" name="days[]" maxlength="2" value="" class="numeric lpad2 day-holder">/
                        <input type="text" placeholder="MM" id="months_3" name="months[]" maxlength="2" value="" class="numeric lpad2 month-holder">/
                        <select name="years[]" id="add_3" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                           <option value="">Year</option>
                           @for($i=1919; $i < 1982; $i++)
                           <option value="{{ $i }}">{{ $i }}</option>
                           @endfor
                        </select>
                     </div>
                  </div>
                  <input type="hidden" name="ages[]" id="age_3" value="">
                  <div class="col-md-6 col-sm-6 col-xs-12 control-input" id="traveller_4" style="display: none">
                     <label class="input-label">Age of the fourth Traveller</label>
                     <div class="date-wrapper question-answer   date_of_birth">
                        <input type="text" placeholder="DD" id="days_4" name="days[]" maxlength="2" value="" class="numeric lpad2 day-holder">/
                        <input type="text" placeholder="MM" id="months_4" name="months[]" maxlength="2" value="" class="numeric lpad2 month-holder">/
                        <select name="years[]" id="add_4" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                           <option value="">Year</option>
                           @for($i=1919; $i < 1982; $i++)
                           <option value="{{ $i }}">{{ $i }}</option>
                           @endfor
                        </select>
                     </div>
                  </div>
                  <input type="hidden" name="ages[]" id="age_4" value="">
                  <div class="col-md-6 col-sm-6 col-xs-12 control-input " id="traveller_5" style="display: none">
                     <label class="input-label">Age of the fifth Traveller</label>
                     <div class="date-wrapper question-answer   date_of_birth date_of_birth">
                        <input type="text" placeholder="DD" id="days_5" name="days[]" maxlength="2" value="" class="numeric lpad2 day-holder">/
                        <input type="text" placeholder="MM" id="months_5" name="months[]" maxlength="2" value="" class="numeric lpad2 month-holder">/
                        <select name="years[]" id="add_5" class="numeric lpadyear year-holder" onchange="checknumtravellers()" style="box-shadow: none !important;border: 0 !important;width: 100%;">
                           <option value="">Year</option>
                           @for($i=1919; $i < 1982; $i++)
                           <option value="{{ $i }}">{{ $i }}</option>
                           @endfor
                        </select>
                     </div>
                  </div>
                  <input type="hidden" name="ages[]" id="age_5" value="">
                  @endif
                  <div id="birthday_view"></div>
                  <style>
                     .emailicon {
                     z-index: 1;
                     padding: 10px 7px !important;
                     position: absolute;
                     margin-top: -41px;
                     margin-left: 3px;
                     background: #F1F1F1;
                     }
                     .mobemailicon {
                     z-index: 999;
                     padding: 12px 7px !important;
                     position: absolute;
                     margin-top: -40px;
                     margin-left: 3px;
                     background: #F1F1F1;
                     }
                     .date-wrapper {
                     height: 42px;
                     box-shadow: 0 0 0 1px #cac2d5;
                     border-radius: 0px;
                     position: relative;
                     -webkit-transition: all 0.2s linear;
                     width: 100%;
                     overflow: hidden;
                     display: flex;
                     display: -webkit-flex;
                     align-items: center;
                     -webkit-align-items: center;
                     color: #566266;
                     background-color: white;
                     }
                     .date-wrapper input {
                     width: 32%;
                     border: 0 none;
                     text-align: center;
                     box-shadow: none;
                     border-radius: 4px;
                     padding: 15px 15px;
                     display: block;
                     max-height: 50px;
                     background-color: white;
                     }
                  </style>
                    @if(isset($fields['email']))
                     @if($fields['email'] == "on" )  
                  <div class="col-md-12 col-sm-12 col-xs-12 control-input email-main">
                     <label class="input-label">Email Address (Required)</label>
                     <input id="savers_email" name="savers_email" value="" class="form-control form-control" type="email" placeholder="Email" style="padding-left: 40px !important;" required="">
                     <span class="hidden-xs emailicon" style="color:#1BBC9B;">
                     <i class="fa fa-envelope" aria-hidden="true"></i>
                     </span>
                     <span class="visible-xs mobemailicon" style="color:#1BBC9B;">
                     <i class="fa fa-envelope" aria-hidden="true"></i>
                     </span>
                  </div>
               @endif
               @endif
                  <div class="col-md-12" style="clear: both;">
                     <span id="family_error" style="display: none; font-size: 16px;font-weight: bold;text-align: right;padding: 20px; color:yellow;"><i class="fa fa-warning"></i> </span>
                     <button type="submit" name="GET QUOTES" id="GET_QUOTES" class="btn btn-danger" style=" padding: 10px 30px; margin-top: 20px; display: block;"><i class="fa fa-list"></i> Get a Quote </button>
                  </div>
               </div>
               <input type="hidden" name="broker" value="">     
               <input type="hidden" name="agent" value="">
               <input type="hidden" name="quote" value="">
            </form>
            <div class="clearfix"></div>
         </div>
         <div class="col-md-2 hidden-xs"></div>
      </div>
   </div>
</section>
<script>
   var container = document.getElementsByClassName("birthdate")[0];
   container.onkeyup = function(e) {
       var target = e.srcElement || e.target;
       var maxLength = parseInt(target.attributes["maxlength"].value, 10);
       var myLength = target.value.length;
       if (myLength >= maxLength) {
           var next = target;
           while (next = next.nextElementSibling) {
               if (next == null)
                   break;
               if (next.tagName.toLowerCase() === "input") {
                   next.focus();
                   break;
               }
           }
       }
       // Move to previous field if empty (user pressed backspace)
       else if (myLength === 0) {
           var previous = target;
           while (previous = previous.previousElementSibling) {
               if (previous == null)
                   break;
               if (previous.tagName.toLowerCase() === "input") {
                   previous.focus();
                   break;
               }
           }
       }
   }
  
   function supervisayes(){
   window.setTimeout(function(){    
    var tt = document.getElementById('departure_date').value;
    var date = new Date(tt);
    var newdate = new Date(date);
    newdate.setDate(newdate.getDate() + 364);
    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();
    if(mm <= 9){
    var mm = '0'+mm;    
    }
    if(dd <= 9){
    var dd = '0'+dd;    
    }
    //var someFormattedDate = mm + '/' + dd + '/' + y;
    var someFormattedDate = y + '/' + mm + '/' + dd;
    document.getElementById('return_date').value = someFormattedDate;
   }, 1000);
   }
   
   
   function checkfamilyplan(){
   //Eligibility
   var inps = json_encode();
   var ages = [];
   for (var i = 0; i <inps.length; i++) {
   var inp=inps[i];
   if(inp.value > 0){
       ages.push(inp.value);
   }
   }
   
   Array.prototype.max = function() {
     return Math.max.apply(null, this);
   };
   
   Array.prototype.min = function() {
     return Math.min.apply(null, this);
   };
   
   var max_age = ages.max();
   var min_age = ages.min();
   
   if(document.getElementById('familyplan_temp').value == 'yes'){
   if(document.getElementById('number_travelers').value >='2' && max_age <=59 && min_age <=21){
   document.getElementById('GET_QUOTES').style.display = 'block';
   document.getElementById('family_error').innerHTML = '';
   document.getElementById('family_error').style.display = 'none';
   } else {
   document.getElementById('GET_QUOTES').style.display = 'none';
   if(document.getElementById('number_travelers').value <'2'){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.';
   } else if(max_age > 59){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Maximum age for family plan should be 59';   
   } else if(min_age > 21){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21';  
   }
   document.getElementById('family_error').style.display = 'block';    
   }
   
   
   } else {
       document.getElementById('GET_QUOTES').style.display = 'block';
       document.getElementById('family_error').style.display = 'none'; 
   }
       
   }
   
   
   function checknumtravellers(){
       //Number OF Traveller
       var number_of_traveller = document.getElementById('number_travelers').value;
       for(var t=1; t<=number_of_traveller; t++){
           $("#traveller_"+t).hide();
           document.getElementById('age_'+t).value = '';
       }
       for(var i=1; i<=number_of_traveller; i++){
       $("#traveller_"+i).show();
       document.getElementById('add_'+i).required = true;
       }
   var startdate = document.getElementById('departure_date').value;    
   for(var i=1; i<=number_of_traveller; i++){
   var d = document.getElementById('days_'+i).value;
   var m = document.getElementById('months_'+i).value;
   var y = document.getElementById('add_'+i).value;
   var dob = y + '-' + m + '-' + d;
   //alert(dob);
   dob = new Date(dob);
   var today = new Date(startdate);
   var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
   $('#age_'+i).val(age);
   }
   p = 1;
   pr = number_of_traveller + p;
   for(var p = pr; p<=8; p++){
   document.getElementById('days_'+p).value = '';
   document.getElementById('months_'+p).value = '';
   document.getElementById('add_'+p).value = '';
   }
   
   //checkfamilyplan();
   }
   
   window.onload = function() {
     checknumtravellers();
   };
</script>
<script>
   /*   jQuery('#gender:before').click(function() {
          var text = jQuery(this).attr('data-on-text');
   //        var text2 = jQuery(this).attr('data-off-text');
   //        checkbox-6
           console.log(text);
   //         console.log(text2);
      });
   
      function subform(){
          alert('submit form');
          return false;
      }
   */
      jQuery(document).ready(function($){
          $("select[name=number_travelers]").on("change", function(){
              var number_of_traveller = $(this).val();
              var aa = "";
              for(var i=2; i<=number_of_traveller; i++){
                  aa = aa +'<div class="col-md-6 col-sm-6 col-xs-12 control-input">' + $(".birthday")[0].outerHTML +'</div>';
              }
   
              $("#birthday_view").html(aa);
              console.log( $(".birthday")[0] );
          })
      });
</script>
<script>
   function supervisayes(){
   //window.setTimeout(function(){ 
       var tt = document.getElementById('departure_date').value;
       var date = new Date(tt);
       var newdate = new Date(date);
       newdate.setDate(newdate.getDate() + 364);
       var dd = newdate.getDate();
       var mm = newdate.getMonth() + 1;
       var y = newdate.getFullYear();
       if(mm <= 9){
       var mm = '0'+mm;    
       }
       if(dd <= 9){
       var dd = '0'+dd;    
       }
       //var someFormattedDate = mm + '/' + dd + '/' + y;
       var someFormattedDate = y + '-' + mm + '-' + dd;
       document.getElementById('return_date').value = someFormattedDate;
       //alert(someFormattedDate);
   //}, 1000);
   
   checknumtravellers();
   }
   
   function checktravellers(){
       //Number OF Traveller
       var number_of_traveller = $("#number_travelers").val();
       for(var t=2; t<=8; t++){
           $("#traveller_"+t).hide();
           $("#add_" +t).prop("required", false);
       }
       for(var i=2; i<=number_of_traveller; i++){
           $("#traveller_"+i).show();
           $('#add_'+i).prop("required", true);
       }
       //reset values for other people
       var numt = $('#number_travelers').val() || 1;
       var one = 1;
       var num = parseInt(numt) + parseInt(one);
       for(var a=num; a<8; a++){
           $('#add_'+a).val('');
           $('#add_'+a).prop('required', false);
       }
   
       checkfamilyplan();
   }
   
   
   function checkfamilyplan(){
       //Eligibility
       var inps = document.getElementsByName('ages[]');
       var ages = [];
       for (var i = 0; i <inps.length; i++) {
           var inp=inps[i];
           if(inp.value > 0){
               ages.push(inp.value);
           }
       }
       
       Array.prototype.max = function() {
         return Math.max.apply(null, this);
       };
       
       Array.prototype.min = function() {
         return Math.min.apply(null, this);
       };
   
       var max_age = ages.max();
       var min_age = ages.min();
       if($('#familyplan_temp').val() == 'yes'){
           if($('#number_travelers').value >='2' && max_age <=59 && min_age <=21){
               $('#GET_QUOTES').css('display', 'block');
               $('#family_error').html('');
               $('#family_error').css('display', 'none');
           } 
           else {
               $('#GET_QUOTES').css('display', 'none');
               if($('#number_travelers').value <'2'){
                   $('#family_error').html('<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.');
               } 
               else if(max_age > 59){
                   $('#family_error').html('<i class="fa fa-warning"></i> Maximum age for family plan should be 59');  
               } 
               else if(min_age > 21){
                   $('#family_error').html('<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21'); 
               }
               $('#family_error').css('display', 'block'); 
           }
       } 
       else {
           $('#GET_QUOTES').css('display', 'block');
           $('#family_error').css('display', 'none');  
       }
       
   }
   
   window.onload = function() {
     checktravellers();
   };
   
</script>