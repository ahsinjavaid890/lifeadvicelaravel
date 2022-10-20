@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.main')
@include('frontend.companypages.includes.sectiontwo')
@include('frontend.companypages.includes.sectionthree')
<section class="third-section">
    <div class="container-homepage">
        <div class="calculate-heading" style="text-align: center;">
            <h2><span>Summary of  </span>Visitors Insurance Benefits</h2>
        </div>
        <div class="row benifitrow">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-checkmark text-secondary-color body-text-2">
                            <li> In Hospital Care</li>
                            <li>- Diagnostic Services</li>
                            <li>- Prescription Drugs</li>
                            <li>- Road Ambulance</li>
                            <li>- Air Ambulance</li>
                            <li>- Remote Evacuation</li>
                            <li>- Emergency Dental Services</li>
                            <li>- Medical Services</li>
                            <li>- Out-patient Medical Treatment</li>
                            <li>- Rental of Essential Medical Appliances</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ui class="list-checkmark text-secondary-color body-text-2">
                            <li>- Private Duty Nursing</li>
                            <li>- Health Practitioners</li>
                            <li>- Repatriation</li>
                            <li>- Special Attendant</li>
                            <li>- Return of Family Member</li>
                            <li>- Return & Escort of Dependent Child/Grandchild</li>
                            <li>- Family/Friend to Bedside</li>
                            <li>- Child Care</li>
                            <li>- In the Event of Death</li>
                        </ui>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img src="assets/img/images/visotor1.png">
            </div>
        </div>
    </div>
</section>
<section class="fourth-section">
    <div class="container">
        <div class="calculate-heading" style="text-align: center;">
            <h2>FAQ of Student Insurance</h2>
        </div>
        <div class="benifitrow faq">
            <div class="accordion" id="accordionExample">
             <div class="card">
                <div class="card-header" id="faq1">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content1" aria-expanded="false" aria-controls="collapseOne">
                      <i class="fa fa-plus"></i> What are the best plans for international students? 
                      </button>
                   </h5>
                </div>
                <div id="faq_content1" class="collapse" aria-labelledby="faq1" data-parent="#accordionExample" style="">
                   <div class="card-body">
                      Before making a purchase, it is important to check with the school which you will be attending, to make sure that there aren't any specific insurance requirements that need to be fulfilled. If you will be traveling on a short-term travel visa, you should also be eligible for our travel medical insurance policies as well. Consider the Student Secure Elite plan or the Student Health Advantage plan. Both international student plans and travel medical insurance policies are designed to provide coverage for any new and unexpected illnesses or injuries that occur after the policy goes into effect. 
                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq2">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content2" aria-expanded="false" aria-controls="collapseTwo">
                      <i class="fa fa-plus"></i>  Can I add my F2 Visa spouse and dependents to my F1 Visa student insurance plan? 
                      </button>
                   </h5>
                </div>
                <div id="faq_content2" class="collapse" aria-labelledby="faq2" data-parent="#accordionExample">
                   <div class="card-body">
                      You may add your family on a student plan by selecting spouse and child coverage in the online application. Adding your spouse and dependents will increase your premium for the coverage duration. You may also consider purchasing separate short term insurance for your spouse and children as a cost effective option.


                   </div>
                </div>
             </div>
             <div class="card">
                <div class="card-header" id="faq3">
                   <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_content3" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa fa-plus"></i>   What is the best insurance plan for J-1 scholars in the US? 
                      </button>
                   </h5>
                </div>
                <div id="faq_content3" class="collapse" aria-labelledby="faq3" data-parent="#accordionExample">
                   <div class="card-body">
                      We have several plans for J-1 scholars. Enter in your specific requirements on our J1 Visa Health Insurance: Get Quotes page. These plans should fulfill all requirements given by your university. To obtain the signed visa letter, you may print it out from the email you receive with confirmation of your purchase. Provide your age and the duration of your stay, and then click "get quotes." On the result page you will be able to see all the plans with their respective quotes. The price of each plan depends on your age and duration of stay. Please feel free to call us at 1.866.384.9104 or email us at support@visitorscoverage.com if you have any questions.
                   </div>
                </div>
             </div>

          </div>
        </div>
    </div>
</section>

<div class="check-products mt-5 pb-5 pt-5">
    <div class="container-homepage">
   <div class="policies-heading text-center">
       <h2><span>Check Our Other Products</span></h2>
   </div>
   <hr>
   <div class="row mt-5 pb-5">
       <div class="col-md-4">
           <div class="card slider-card border-0">
             <div class="card-body text-center">
                <div class="simple-online-transparent-slider">
                   <img src="assets/img/images/family.png">
                </div>
                <div class="slider-heading">
                   <h2><span>Super Visa </span> Insurance</h2>
                </div>
                <div class="slider-pargraph">
                   <p>Super Visa Insurance is needed when you apply for a Super Visa for your family, parents or grand-parents.</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-4">
           <div class="card slider-card border-0">
             <div class="card-body text-center">
                <div class="simple-online-transparent-slider">
                   <img src="assets/img/images/bed.png">
                </div>
                <div class="slider-heading">
                   <h2><span>Visitors</span> Insurance</h2>
                </div>
                <div class="slider-pargraph">
                   <p>Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor.</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-4">
           <div class="card slider-card border-0">
             <div class="card-body text-center">
                <div class="simple-online-transparent-slider">
                   <img src="assets/img/images/bed.png">
                </div>
                <div class="slider-heading">
                   <h2><span>Travel</span> Insurance</h2>
                </div>
                <div class="slider-pargraph">
                   <p>Travel Insurance protects you and your luggage against many perils you may come across while traveling abroad.</p>
                </div>
             </div>
          </div>
       </div>  
   </div>
    </div>
</div>
@endsection