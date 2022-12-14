<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
<script type="text/javascript" src="{{ url('public/front/daterangepicker/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{url('public/front/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/daterangepicker.min.js') }}"></script>
@php
$url = request()->segment(count(request()->segments()));
$firstsection = DB::table('travelpages')->where('url' , $url)->first();
@endphp
<div class="health-inssurance-hero-banners super-hero">
   <div class="container-homepage">
      <div class="row mb-3">
         <div class="col-md-6 hero-texts">
            <div class="herrotext super-hero-text">
               <h2 class="wow fadeInUp" data-wow-delay=".4s">{!! $firstsection->main_heading !!}</h2>
               <h5 class="wow fadeInUp  text-justify super-text" data-wow-delay=".6s"><span class="text-white">{{ $firstsection->sub_heading }}</span></h5>
               @if($firstsection->main_button_text)
               <div class="btns d-flex">
                  <div class="details">
                     <a href="{{ $firstsection->main_button_link }}" class=" btn-lg">{{ $firstsection->main_button_text }}</a>
                  </div>
               </div>
               @endif
            </div>
         </div>
         <div class="col-md-6 hero-images">
            <div class="hero-image super-images" style=" background-image: url('{{ url('') }}/public/images/{{ $firstsection->main_image  }}');
               background-position: 50% 70%;
               background-size: 100%;
               background-repeat: no-repeat;">
            </div>
         </div>
      </div>
      @if($firstsection->form == 1)
      <div class="row">
         <div class="col-md-12">
            <form action="#" method="POST">
               <input type="hidden"  name="sum_insured2" id="sum_insured2">
            <div class="p-0 qoute-card">
               <div class="card-body p-0">
                  <div  data-v-67adc629="" class="quotes-generator-bar fixed">
                     <div  class="grid-container">
                        <div  class="grid-row grid-row--bar">
                           <div  class="d-grid generator-bar-row-wrap">
                              <label data-toggle="modal" data-target="#myModal1"  class="form-input input-destination has-arrow">
                                 <input  type="text" placeholder="Coverage Amount" required="required" id="coverageprice" class="input-field" disabled>
                                 <span  class="label-text">Coverage Amount</span>
                                 <div  class="dest-value"></div>
                              </label>
                              <label  data-toggle="modal" data-target="#myModal2"  class="form-input input-traveler-info has-arrow">
                              <input  id="citishow" type="text" placeholder="Traveler Information" required="required" id="age" class="input-field" disabled>
                              <span  class="label-text">Traveler Information</span>
                              </label>
                              <div  data-toggle="modal" data-target="#myModal3"   class="form-input date-range form-input__date-range">
                                 <div  class="input-field">
                                    <div  class="from">
                                       <i  class="icon icon-calendar"></i>
                                       <div id="coveragedate" class="value"> Start Date 
                                       </div>
                                    </div>
                                   <!--  <div  class="sep"></div>
                                    <div  class="to">
                                       <div  class="value">End Date</div>
                                    </div> -->
                                 </div>
                              </div>
                              <button  disabled="disabled" class="button button-primary get-quotes-button"> Get Quotes </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" aria-hidden="true" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content rounded-3">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card lg-wizard-card modal-card border-0">
                           <h2 class="heading-3 card-heading">Please Select Coverage Ammount?</h2>
                           <div class="card-content">
                              <p class="card-info">Coverage amount, your insurance limit is the maximum amount your insurer may pay out for a claim, as stated in your policy.</p>
                              <div class="row">
                                @if(isset($fields['sum_insured']))
                                @if($fields['sum_insured'] == 'on')
                                  <div class="col-md-6">
                                      <div class="wrapper-dropdown" id="primary_destination">
                                        <span>Coverage Ammount</span>
                                        <ul class="dropdown"  >
                                         @foreach($sum_insured as $r)


                                         <li @if($loop->last) class="borderbottomnone" @endif onclick="selectcoverageammount({{$r->sum_insured}});">
                                            <span class="selectspan">${{ $r->sum_insured }}</span>
                                         </li>
                                         @endforeach
                                         <script type="text/javascript">
                                             function selectcoverageammount(id) {
                                                 $('#sum_insured2').val(id);
                                                 $('#coverageprice').val(id);
                                                 $('#covergaeerror').hide();
                                               }
                                               function firstnext() {
                                                  if($('#sum_insured2').val() == '')
                                                  {
                                                     $('#covergaeerror').show();
                                                     $('#covergaeerror').html('Please Select Covergae Ammount');
                                                  }else{
                                                     $('#firstnextfake').hide();
                                                     $('#firstnextorignal').show();
                                                     $('#firstnextorignal').click();
                                                  }
                                               }
                                         </script>
                                        </ul>
                                      </div>
                                  </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['fname']))
                                 @if($fields['fname'] == 'on')
                                 <div class="col-md-6">
                                    <div class="custom-form-control">
                                       <input type="text" name="fname" placeholder="First Name" required id="irstname" class="wrapperfrom">
                                       <label for="firstname" class="form-label">First name</label>
                                    </div>
                                 </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['lname']))
                                 @if($fields['lname'] == 'on')
                                 <div class="col-md-6">
                                    <div class="custom-form-control">
                                       <input type="text" name="lname" placeholder="Last Name" required id="lname" class="wrapperfrom">
                                       <label for="lname" class="form-label">Last name</label>
                                    </div>
                                 </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['email']))
                                 @if($fields['email'] == "on" )
                                   <div class="col-md-6">
                                      <div class="custom-form-control">
                                         <input type="text" name="savers_email" placeholder="Please Enter Your Email" required id="savers_email" class="wrapperfrom">
                                         <label for="savers_email" class="form-label">Email</label>
                                      </div>
                                   </div>
                                @endif
                                @endif
                                @if(isset($fields['phone']))
                                @if($fields['phone'] == 'on')
                                 <div class="col-md-6">
                                    <div class="custom-form-control">
                                       <input onkeyup="validatephone()" type="text" name="phone" placeholder="Phone Number" required id="phone" class="wrapperfrom">
                                       <label for="phone" class="form-label">Phone <b id="phone_error" class="text-danger"></b></label>
                                    </div>
                                 </div>
                                 <script>
                                    function validatephone(){
                                       var checkphone = document.getElementById('phone').value;
                                       document.getElementById('phone').value = checkphone.replace(/\D/g,'');
                                       if (checkphone.length < 10) {
                                       document.getElementById('phone_error').innerHTML = '<small>(Must be 10 digits)</small>';
                                       document.getElementById('getquote').disabled = true;  
                                       } else {
                                       document.getElementById('getquote').disabled = false; 
                                       document.getElementById('phone_error').innerHTML = '';
                                       }
                                       }
                                 </script>
                                 @endif
                                 @endif
                              </div>
                                <div class="text-danger mt-4" id="covergaeerror"></div>
                                
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                          <span id="firstnextfake" class="btn btn-default" onclick="firstnext()">Next</span>
                          <span style="display: none;" id="firstnextorignal"  class="btn btn-default btn-next">Next</span>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card modal-card lg-wizard-card border-0">
                           <h2 class="heading-3 card-heading">How many travelers?</h2>
                           <!----><!----><!----><!---->
                           <div class="card-content">
                              <p  class="card-info"> Enter the age for each person that will be traveling.</p>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="d-flex travelerinfo">
                                       <span class="travelerheading primarytravelheading">Primary Traveler</span>
                                       <div id="ageinput" class="form-input input-age">
                                          <input type="number" placeholder="Age" required="required" pattern="[0-9]*" maxlength="3" class="input-field age" min="0" inputmode="numeric">
                                       </div>
                                       <div style="display: none;" id="dateofbirthinput" class="form-input input-date-of-birth">
                                          <input type="text" placeholder="MM/DD/YYYY" required="required" pattern="\d{1,2}/\d{1,2}/\d{4}" maxlength="10" class="input-field dob">
                                       </div>
                                       <span class="switch-input">or 
                                          <a onclick="showdateofbirth()" id="dateofbirthtext" href="javascript:void(0)" class="link-text-4 link-text-default-color">Enter Date of Birth</a>
                                          <a onclick="showage()" style="display: none;" id="agetext" href="javascript:void(0)" class="link-text-4 link-text-default-color">Enter Age</a>
                                       </span>
                                    </div>
                                 </div>
                                 
                                 <div class="additionaltraveler"></div>
                                 <div class="col-md-12 mt-3">
                                    <div class="travelerinfo">
                                       <span onclick="addtravellers()" class="button button-add-another button-trav-add"> Add Additional Traveler </span>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                           <span class="btn btn-default btn-prev">Prev</span>
                           <span id="paramsOkay" class="btn btn-default btn-next">Next</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card modal-card lg-wizard-card border-0">
                           <h2 class="heading-3 card-heading">Start Date Of Covergae and Some Other Details</h2>
                           <div class="card-content">
                              <p class="card-info">Please Select Date When You Start Coverage</p>
                              <div class="row">
                                 <div class="col-md-6 birthdateinput">
                                    <input autocomplete="off" id="departure_date"  name="departure_date" class="wrapperfrom" type="text" required onchange="supervisayes()">
                                    <i class="fa fa-calendar" onclick="$('#departure_date').focus();"></i> 
                                 </div>
                                 <div class="col-md-6">
                                    <div class="row">
                                       <div class="col-md-12">
                                             <span class="questionheading">Do you require Family Plan ?</span>
                                             <div class="col-md-12 no-padding">
                                                <label class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="fplan" value="yes" style="width: auto !important;height: auto;" onclick="changefamilyyes()"> Yes</label> <label class="text-dark" style="display: inline-block;margin-right: 10px;"><input type="radio" name="fplan" value="no" checked="" style="width: auto !important;height: auto;" onclick="changefamilyno()"> No</label>
                                             </div>
                                             <input type="hidden" id="familyplan_temp" name="familyplan_temp" value="no">
                                             <script>
                                                function changefamilyyes(){
                                                   document.getElementById('familyplan_temp').value = 'yes';   
                                                   checkfamilyplan();
                                                }
                                                function changefamilyno(){
                                                   document.getElementById('familyplan_temp').value = 'no'; 
                                                   checkfamilyplan();
                                                }
                                             </script>
                                       </div>
                                       <div class="col-md-12">
                                          <span class="questionheading">Pre-existing Condition ?</span>
                                          <div class="col-md-12 no-padding">
                                          <label  class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="pre_existing" value="yes" style="width: auto !important;height: auto;" class="text-dark"> Yes</label> <label class="text-dark" style="display: inline-block;margin-right: 10px;"><input type="radio" name="pre_existing" value="no" checked="" style="width: auto !important;height: auto;"> No</label>
                                       </div>
                                       </div>
                                       <div class="col-md-12">
                                          <span class="questionheading">Do you Smoke in last 12 months ?</span>
                                          <div class="col-md-12 no-padding">
                                             <label class="text-dark" style="display: inline-block;margin-right: 10px;margin-left: 25px;"><input type="radio" name="Smoke12" value="yes"  checked=""  style="width: auto !important;height: auto;"> Yes</label> <label style="display: inline-block;margin-right: 10px;" class="text-dark">
                                             <input type="radio" name="Smoke12" value="no"  style="width: auto !important;height: auto;"> No</label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                         <span class="btn btn-default btn-prev">Prev</span>
                         <span class="btn btn-default btn-next">Done</span>
                      </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
         </div>
      </div>
      @endif
   </div>
</div>
<script type="text/javascript">
   var a = 0;
   function addtravellers() {
      a++
      var number_of_traveller = '5';

      if(a < number_of_traveller){
         $('.additionaltraveler').append('<div id="removebutton'+a+'" class="col-md-12 mt-3"> <div class="d-flex travelerinfo"> <span class="travelerheading">Additional Traveler</span> <div class="form-input input-age"> <input type="number" placeholder="Age" required="required" pattern="[0-9]*" maxlength="3" class="input-field age" min="0" inputmode="numeric"> </div>  </span><span onclick="removeappendvalue('+a+')" class="button remove-line remove-icon md-hide sm-hide"> </div> </div></span>');
      }else{
         $('.button-add-another').fadeOut(300);
      }
   }
</script>
<script>
   var today = new Date();
   var dd = today.getDate();
   var mm = today.getMonth() + 1; //January is 0!
   var yyyy = today.getFullYear();
   if (dd < 10) {
      dd = '0' + dd;
   } 
   if (mm < 10) {
     mm = '0' + mm;
   } 
   var today = mm + '/' + dd + '/' + yyyy;
   $(function() {
     $('input[name="departure_date"]').daterangepicker({
       opens: 'left',
      minDate: today,
      singleDatePicker: true,
       showDropdowns: true,
     }, function(start, end, label) {

     });
   });
   function supervisayes(){
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
   }
</script>
<script type="text/javascript">
   function removeappendvalue(id) {
      $('.button-add-another').fadeIn(300);
      $('#removebutton'+id).remove();
   }
   function showdateofbirth() {
      $('#ageinput').hide();
      $('#dateofbirthtext').hide();
      $('#agetext').show();
      $('#dateofbirthinput').show();
      
   }
   function showage() {
      $('#agetext').hide();
      $('#dateofbirthinput').hide();
      $('#ageinput').show();
      $('#dateofbirthtext').show();
      
   }
</script>
<script type="text/javascript">
   $( "#destination_country" ).change(function() {
       var sel = $( "#destination_country option:selected" ).val();
       var textbox = document.getElementById("txtmanuid");
       textbox.value =$( "#destination_country option:selected" ).text();
   });
</script>
<script>
   $(document).ready(function(){
   
       $('#myModal2').on('click','#paramsOkay', function (e) {
           $('#ages').val($('#age').val())
   });
   })
</script>
<script type="text/javascript">
   $( "#primary_destination" ).change(function() {
       var sel = $( "#primary_destination option:selected" ).val();
       var textbox = document.getElementById("destinations");
       textbox.value =$( "#primary_destination option:selected" ).text();
   });
</script>
<script type="text/javascript">
   $("div[id^='myModal']").each(function(){
   
   var currentModal = $(this);
   
   //click next
   currentModal.find('.btn-next').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show'); 
   });
   
   //click prev
   currentModal.find('.btn-prev').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show'); 
   });
   
   });
   
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#gender'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#citizenship'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
    $(function() {
  var dd1 = new dropDown($('#primary_destination'));
  
  $(document).click(function() {
    $('.wrapper-dropdown').removeClass('active');
  });
});

function dropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
dropDown.prototype = {
  initEvents: function() {
    var obj = this;
    
    obj.dd.on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
    
    obj.opts.on('click', function() {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
    });
  }
}
</script>
<script type="text/javascript">
  //----------variables----------//

var day = "";
var month = "";
var year = "";
var currentDate = "";
var monthStartDay = "";

var monthTextArray = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

var dayTextArray = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

//----------functions----------//

function getMonthInfo(year, month) {

  //use current month to find number of days in month
  //i dont know why i have to add 1 to month
  var startDate = new Date(year, month + 1, 0);
  var monthLength = startDate.getDate();

  var startDate = new Date(year, month, 1);
  var monthStartDay = startDate.getDay();

  return [monthLength, monthStartDay];

}

function drawCal(monthInfo) {

  var daysInMonth = monthInfo[0];
  var monthStartDays = monthInfo[1];

  //clear cal tbody
  $("#cal").empty();
  $("#cal").append("<tr class=days><td>sun</td><td>mon</td><td>tue</td><td>wed</td><td>thur</td><td>fri</td><td>sat</td>");

  //create empty row, append to to tbody
  var $rowOut = $("<tr></tr>");
  $("#cal").append($rowOut);

  //shift first row by month start date
  for (var i = 1; i <= monthStartDays; i++) {
    var $day = "<td></td>";
    $("#cal tr:last").append($day);
  }

  //for each day, append a td to the row
  for (var i = 1; i <= daysInMonth; i++) {
    var $day = "<td><a>" + (i) + "</a></td>";
    $("#cal tr:last").append($day);

    //if day 7 (w/shift), append row contaning 7 days to tbody and clear row
    if ((i + monthStartDays) % 7 == 0 & i != 0) {
      $("#cal").append($rowOut);
      $rowOut = "<tr></tr>";
      $("#cal").append($rowOut);
    }
  }
}

//----------wiring----------//

$(".button_left").click(function() {

  month--;

  if (month < 0) {
    year--;
    month = 11;
  }

  //left button click
  $(".cal_head span").text(monthTextArray[month] + " " + year);
  drawCal(getMonthInfo(year, month));

});

//right button click
$(".button_right").click(function() {

  month++;

  if (month > 11) {
    year++;
    month = 0;
  }

  $(".cal_head span").text(monthTextArray[month] + " " + year);
  drawCal(getMonthInfo(year, month));

});

$("#cal").on("click", "td", function(e) {

  e.preventDefault();
  $("#cal td").removeClass("circle");
  $(this).addClass("circle");
  var outputDate = monthTextArray[month] + " " + $(this).children("a").html() + ", " + year;
  console.log(outputDate);
  $("#outputText").text(outputDate);
  $("#coveragedate").text(outputDate);

});

//----------run----------//

//get current month and year
currentDate = new Date();
year = currentDate.getFullYear();
month = currentDate.getMonth();
day = currentDate.getDate();

//get text month name from month number and write to span
$(".cal_head span").text(monthTextArray[month] + " " + year);

//inital calander draw based on current month
drawCal(getMonthInfo(year, month));

//var selector = ("td a:contains(" + day + ")");
var selector = $("td a").filter(function(){
 return $(this).text() === day.toString();
});

//var selector = $("#cal").find("a="+day+"");


$(selector.parent()).addClass("circle");

var outputDate = monthTextArray[month] + " " + day + ", " + year;


$("#outputText").text(outputDate);
</script>