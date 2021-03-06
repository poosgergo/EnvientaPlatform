<?php
    use App\Utils;
?>

@extends('00_header.platform')

@section('content')

    <div class="container p-3"><!-- Begin of the container -->
      <form method="post" id="profileForm">
        {{ csrf_field() }}
      <div class="row alert" style="display:none" id="msg">
      </div>  
      <div class="row mb-4"><!-- Begin of the Row -->
        <div class="col-md-12"><!-- Begin of the Main colum -->
          <div class="" style="height: 100px;"></div>

          <div class="row"><!-- Telegram attention -->
            <div class="col-md-12">
              <a href="https://t.me/envienta" target="_blank">
                <div class="card border border-dark mb-5 _bpulse">
                  <div class="card-body">
                    <h6 class="text-center mb-0">
                      @lang('campaign.TELEGRAM');
                      <a href="https://t.me/envienta" target="_blank"></a> <i class="fab fa-telegram-plane _blue"></i>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
          </div><!-- End of  Telegram attention -->

		  <div class="alert alert-danger" id="errorMsg" style="display:none">
		  </div>	

          <div class="row my-5">
            <div class="col-md-12">
              <div class="text-center">
                <h3>
                  <i class="fa fa-user-plus _clr" aria-hidden="true"></i>
                    @lang('profile.PICK_TYPE')
                    <br>
                  <h5>@lang('profile.CAN_MORE')</h5>
                </h3>
              </div>
            </div>
          </div>

          <hr>

          <div class="row my-5"><!-- Begin of the - Maker/Projects/Investor -->
            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-cogs fa-3x _clr mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input name="isMaker" class="form-check-input" type="checkbox" id="maker_check" {{$user->isMaker ? 'checked="true"' : ''}}>
                    <label class="form-check-label" for="maker_check">
                      <h5 class="card-text">@lang('profile.MAKER')</h5>
                      <small class="_clr">@lang('profile.AVAILABLE')</small>
                      <!-- <small><i>Unavailable</i> </small> -->
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-briefcase fa-3x text-dark /*_clr*/ mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="projects_check" disabled="disabled">
                    <label class="form-check-label" for="projects_check">
                      <h5 class="card-text">@lang('profile.PROJECTS')</h5>
                      <small><i>@lang('profile.UNAVAILABLE')</i> </small>
                      <!-- <small><i>Unavailable</i> </small> -->
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-money fa-3x text-dark /*_clr*/ mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="investor_check" disabled="disabled">
                    <label class="form-check-label" for="investor_check">
                      <h5 class="card-text">@lang('profile.INVESTOR')</h5>
                      <small><i>@lang('profile.UNAVAILABLE')</i> </small>
                      <!-- <small><i>Unavailable</i> </small> -->
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End of the - Maker/Projects/Investor -->

          <div class="row mb-5"><!-- Begin of the - Manufacturer/Distributor/Customer -->
            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-industry fa-3x _clr mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input name="isManufacturer" class="form-check-input" type="checkbox" id="manufacturer_check" {{$user->isManufacturer ? 'checked="true"' : ''}}>
                    <label class="form-check-label" for="manufacturer_check">
                      <h5 class="card-text">@lang('profile.MANUFACTURER')</h5>
                      <small class="_clr">@lang('profile.AVAILABLE')</small>
                      <!-- <small><i>Unavailable</i> </small> -->
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-dot-circle-o fa-3x text-dark mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="distributor_check" disabled="disabled">
                    <label class="form-check-label" for="distributor_check">
                      <h5 class="card-text">@lang('profile.DISTRIBUTOR')</h5>
                      <small><i>@lang('profile.UNAVAILABLE')</i> </small>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-shopping-basket fa-3x _clr mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input name="isCustomer" class="form-check-input" type="checkbox" id="customer_check" {{$user->isCustomer ? 'checked="true"' : ''}} >
                    <label class="form-check-label" for="customer_check">
                      <h5 class="card-text">@lang('profile.CUSTOMER')</h5>
                      <small class="_clr">@lang('profile.AVAILABLE')</small>
                      <!-- <small><i>@lang('profile.UNAVAILABLE')</i> </small> -->
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End of the - Manufacturer/Distributor/Customer -->

          <hr>


          <div class="row my-5"><!-- Begin of the Fill-form -->

              <div class="col-md-4">
                <div class="form-group">
                  <label for="email">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i> 
                    @lang('profile.EMAIL')
                  </label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" 
                  	placeholder="@lang('profile.EMAIL')" value="{{$user->email}}" readonly="true">
                  <!--small id="emailHelp" class="form-text text-muted">Please enter a valid email addres</small-->
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="username">
                    <i class="fa fa-user" aria-hidden="true"></i> 
                    @lang('profile.USERNAME')
                  </label>
                  <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp"
                     placeholder="@lang('profile.USERNAME')" value="{{$user->username}}">
                  <small id="emailHelp" class="form-text text-muted">
	                  @lang('profile.USERNAME_HELP')
                  </small>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="real_name">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i> 
                    @lang('profile.REALNAME')
                  </label>
                  <input type="text" class="form-control" name="realname" id="real_name" aria-describedby="emailHelp"
                     placeholder="@lang('profile.REALNAME')" value="{{$user->realname}}">
                  <small id="emailHelp" class="form-text text-muted">
	                  @lang('profile.USERNAME_HELP')
                  </small>
                </div>
              </div>

          </div><!-- End of the Fill-form -->

          <div class="row my-5"><!-- Begin of the Fill-form -->
              <div class="col-md-12">
                <div class="card border border-dark">
                  <div class="card-header">
                    <h6 class="float-left">@lang('profile.ENABLE_PSW')</h6>
                  </div>  
                  <div class="card-body">
                    <input type="checkbox" value="0" id="pw_auth" name="pw_auth">
                    <span id="pswInputs" style="display:none">
                    @lang('profile.PSW'):
                    <input type="password" id="inputPsw"  
	                      	name="psw" value=""  
	                      	value="{{$user->psw}}" />
                    @lang('profile.PSWAGAIN'):
                    <input type="password" id="inputPsw2"  
	                      	name="psw2" value="" 
	                      	value="{{$user->psw}}" />
	                 <br />@lang('profile.PSWHELP')     	
	                 </span>     	
	                </div>
				 	</div>
				 </div>	
          </div><!-- End of the Fill-form -->
          
          

            <div class="row"><!-- Begin of the Photo/Social/Bio Row -->
              <div class="col-md-3">
                <div class="card border border-dark">
                  <div class="card-body text-center">
                    <!-- div class="bg-secondary rounded" style="height: 8.3em;" -->
                      <img class="fa fa-camera text-light img-thumbnail" width="250" aria-hidden="true" src="{{ Utils::userAvatarBig() }}"/>
                    <!-- /div-->
                    <!--
                    <hr>
                    <form>
                      <div class="form-group mb-0">
                        <label for="upload_photo">Your Gravatar profile</label>
                        <!- <label for="upload_photo">Upload photo</label> ->
                        <!- <input type="file" class="form-control-file" id="upload_photo"> ->
                      </div>
                    </form>
                  -->
                  </div>
                </div>
              </div>
              <div class="col-md-9"><!-- Begin of the Social Col-md-9 -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" id="" name="profileUrl" placeholder="Facebook link" value="{{$user->profileUrl}}">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="twitterUrl" id="" placeholder="Twitter link" value="{{$user->twitterUrl}}">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="linkedinUrl" id="" placeholder="LinkedIn link" value="{{$user->linkedinUrl}}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fab fa-ethereum"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="walletAddress" id="" placeholder="ERC-20" value="{{$user->walletAddress}}">
                    </div>
                    <div class="mb-4 ml-1">
                      <small>@lang('profile.ERC20_HELP')</small>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="card border border-dark">
                      <div class="card-body text-left">
                        <div class="form-group mb-0">
                          <label for="user_bio"><h6>@lang('profile.DESCRIPTION')</h6>
                          <small class="text-muted">
                          @lang('profile.DESCRIPTION_HELP')
                          </small></label>
                          <textarea class="form-control" name="bio" id="user_bio" rows="3">{{$user->bio}}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End of the Social Col-md-9 -->
            </div><!-- End of the Photo/Social/Bio Row -->
          </div><!-- End of the Main colum -->
        </div><!-- End of the row -->

        <hr>

        <div class="row mb-4 animated fadeIn {{$user->isMaker ? '' : '_hide'}}" id="_maker"><!-- Begin of the Maker Section -->
          <div class="col-md-12">
            <div class="card border border-dark">
              <div class="card-body text-left">

                <h6 class="text-left mb-3">
                  @lang('profile.MAKER_HELP')
                </h6>


                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">
                    @lang('profile.SKILLS')
                    </span>
                  </div>
                  <input name="skills" type="text" class="form-control proplist"
                   id="basic-url" aria-describedby="basic-addon3" 
                   placeholder="@lang('profile.SKILL_EXAMPLE')" value="{{$user->skills}}">
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">
                    @lang('profile.INTERESTS')
                    </span>
                  </div>
                  <input name="interests" type="text" class="form-control proplist"
                   id="basic-url" aria-describedby="basic-addon3"
                   placeholder="@lang('profile.INTERESTS_EXAMPLE')" value="{{$user->interests}}">
                </div>
              </div>
            </div>
          </div>
        </div><!-- End of the Maker Section -->

        <div class="row mb-4 animated fadeIn {{$user->isManufacturer ? '' : '_hide'}}" id="_manufacturer"><!-- Begin of the Manufacturer Section -->
          <div class="col-md-12">
            <div class="card border border-dark">
              <div class="card-body text-left">
                <h6 class="text-left mb-3">
                  @lang('profile.MANUFACTURER_HELP')
                </h6>

                <!-- <div class="row">
                  <div class="col-md-10">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.ADDRESS')</div>
                      </div>
                      <input id="manufacturerAddress" name="manufacturerAddress"
                       type="text" class="form-control"
                       placeholder="@lang('profile.ADDRESS_EXAMPLE')" value="{{$user->manufacturerAddress}}">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-primary float-right geocomplete-button" data-geocomplete-target="manufacturerAddressTarget" data-geocomplete-field="manufacturerAddress">Find</button>
                  </div>
                </div> -->

                <h6 class="mt-2">@lang('profile.ADDRESS')</h6>



                <div class="row mb-2" id="manufacturerAddressTarget">
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.COUNTRY')</div>
                      </div>
                      <input name="manufacturerAddressCountry" type="text" 
                      class="form-control" value="{{$user->manufacturerAddressCountry}}"
                      data-geo="country_short">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <!-- <label for="validationDefault1">@lang('profile.ZIP')</label> -->
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend1">@lang('profile.ZIP')</span>
                      </div>
                      <input id="validationDefault1" name="manufacturerAddressZip" type="text" class="form-control" placeholder="" aria-describedby="inputGroupPrepend1" aria-describedby="inputGroupPrepend1" value="{{$user->manufacturerAddressZip}}" data-geo="postal_code">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <!-- <label for="validationDefault2">City</label> -->
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend2">
                          @lang('profile.CITY')
                          </span>
                      </div>
                      <input id="validationDefault2" name="manufacturerAddressCity" type="text" class="form-control" placeholder="" aria-describedby="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" value="{{$user->manufacturerAddressCity}}" data-geo="locality">
                    </div>
                  </div>
				</div>
                <div class="row mb-2" id="manufacturerAddressTarget">
                  <div class="col-md-9">
                    <!-- <label for="validationDefault3">@lang('profile.STREET')</label> -->
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend3">@lang('profile.STREET')</span>
                      </div>
                      <input id="validationDefault3" name="manufacturerAddressStreet" type="text" class="form-control" placeholder="" aria-describedby="inputGroupPrepend3" aria-describedby="inputGroupPrepend3" value="{{$user->manufacturerAddressStreet}}" data-geo="route">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <!-- <label for="validationDefault4">@lang('profile.NUMBER')</label> -->
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend4">@lang('profile.NUMBER')</span>
                      </div>
                      <input id="validationDefault4" name="manufacturerAddressStreetNumber" type="text" class="form-control" placeholder="" aria-describedby="inputGroupPrepend4" aria-describedby="inputGroupPrepend4" value="{{$user->manufacturerAddressStreetNumber}}" data-geo="street_number">
                    </div>
                  </div>

                  <input type="hidden" name="manufacturerAddressLat" data-geo="lat">
                  <input type="hidden" name="manufacturerAddressLon" data-geo="lng">
                </div>

                <hr>

                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.MANUFACTURER_NAME')</div>
                      </div>
                      <input type="text" class="form-control" id="manufacturerName" 
                      placeholder="@lang('profile.MANUFACTURER_NAME')" name="manufacturerName" value="{{$user->manufacturerName}}">
                    </div>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.BILLING_ADDRESS')</div>
                      </div>
                      <input type="text" class="form-control" id="" 
                      placeholder="@lang('profile.BILLING_ADDRESS')" name="manufacturerBillingAddress" value="{{$user->manufacturerBillingAddress}}">
                    </div>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.PHONE')</div>
                      </div>
                      <input type="text" class="form-control" id=""
                         placeholder="@lang('profile.PHONE')" name="manufacturerPhoneNumber" value="{{$user->manufacturerPhoneNumber}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.WEB')</div>
                      </div>
                      <input type="text" class="form-control" id=""
                       placeholder="@lang('profile.WEB')" name="manufacturerWebsite" value="{{$user->manufacturerWebsite}}">
                    </div>
                    <select class="custom-select mb-2" name="manufacturerWorkTime" 
                      id="manufacturerWorkTime">
                      <option value="0" disabled selected>@lang('profile.WORKINGTIME'):</option>
                      <option value="1" {{$user->manufacturerWorkTime==1 ? "selected" : ""}}>10 @lang('profile.HOUR_PER_WEEK')</option>
                      <option value="2" {{$user->manufacturerWorkTime==2 ? "selected" : ""}}>20 @lang('profile.HOUR_PER_WEEK')</option>
                      <option value="3" {{$user->manufacturerWorkTime==3 ? "selected" : ""}}>30 @lang('profile.HOUR_PER_WEEK')</option>
                      <option value="4" {{$user->manufacturerWorkTime==4 ? "selected" : ""}}>40 @lang('profile.HOUR_PER_WEEK')</option>
                      <option value="5" {{$user->manufacturerWorkTime==5 ? "selected" : ""}}>50 @lang('profile.HOUR_PER_WEEK')</option>
                    </select>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.TOOLS')</div>
                      </div>
                      <input type="text" class="form-control" id=""
                        placeholder="@lang('profile.TOOLS_EXAMPLE')" name="manufacturerTools" value="{{$user->manufacturerTools}}">
                    </div>
                  </div>
                </div>
                <hr>
                <?php $additionals = $user->getManufacturerAdditionals(); ?>
                <div class="row">
                  <div class="col-md-12">
                    <h6 class="mb-3">@lang('profile.ADDITIONAL')</h6>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="mcb0" id="manufacturer_1" {{$additionals[0] ? "checked" : ""}}>
                      <label class="form-check-label" for="manufacturer_1">
                         @lang('profile.ADDITIONAL0')
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="mcb1" id="manufacturer_2" {{$additionals[1] ? "checked" : ""}}>
                      <label class="form-check-label" for="manufacturer_2">
                        @lang('profile.ADDITIONAL1')
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="mcb2" id="manufacturer_3" {{$additionals[2] ? "checked" : ""}}>
                      <label class="form-check-label" for="manufacturer_3">
                        @lang('profile.ADDITIONAL2')
                      </label>
                    </div>

                    <hr>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mcb3" id="manufacturer_4" {{$additionals[3] ? "checked" : ""}}>
                          <label class="form-check-label" for="manufacturer_4">
                            @lang('profile.ADDITIONAL3')
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mcb4" id="manufacturer_5" {{$additionals[4] ? "checked" : ""}}>
                          <label class="form-check-label" for="manufacturer_5">
                            @lang('profile.ADDITIONAL4')
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mcb5" id="manufacturer_6" {{$additionals[5] ? "checked" : ""}}>
                          <label class="form-check-label" for="manufacturer_6">
                            @lang('profile.ADDITIONAL5')
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mcb6" id="manufacturer_7" {{$additionals[6] ? "checked" : ""}}>
                          <label class="form-check-label" for="manufacturer_7">
                            @lang('profile.ADDITIONAL6')
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mcb7" id="manufacturer_8" {{$additionals[7] ? "checked" : ""}}>
                          <label class="form-check-label" for="manufacturer_8">
                            @lang('profile.ADDITIONAL7')
                          </label>
                        </div>

                      </div>

                      <div class="col-md-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mcb8" id="manufacturer_9" {{$additionals[8] ? "checked" : ""}}>
                          <label class="form-check-label" for="manufacturer_9">
                            @lang('profile.ADDITIONAL8')
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mcb9" id="manufacturer_10" {{$additionals[9] ? "checked" : ""}}>
                          <label class="form-check-label" for="manufacturer_11">
                            @lang('profile.ADDITIONAL9')
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mcb10" id="manufacturer_12" {{$additionals[10] ? "checked" : ""}}>
                          <label class="form-check-label" for="manufacturer_13">
                            @lang('profile.ADDITIONAL10')
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mcb11" id="manufacturer_14" {{$additionals[11] ? "checked" : ""}}>
                          <label class="form-check-label" for="manufacturer_14">
                            @lang('profile.ADDITIONAL11')
                          </label>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mcb12" id="manufacturer_15" {{$additionals[12] ? "checked" : ""}}>
                          <label class="form-check-label" for="manufacturer_15">
                            @lang('profile.ADDITIONAL12')
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="mcb13" id="manufacturer_16" {{$additionals[13] ? "checked" : ""}}>
                          <label class="form-check-label" for="manufacturer_16">
                            @lang('profile.ADDITIONAL13')
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End of the Manufacturer Section -->

        <div class="row mb-4 animated fadeIn {{$user->isCustomer ? '' : '_hide'}}" id="_customer"><!-- Begin of the Customer Section -->
          <div class="col-md-12">
            <div class="card border border-dark">
              <div class="card-body text-left">
                <h6 class="text-left mb-3">
                  @lang('profile.CUSTOMER_HELP')
                </h6>

                <!-- <div class="row">
                  <div class="col-md-10">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Delivery address</div>
                      </div>
                      <input name="customerAddress" type="text" class="form-control geocomplete" id="customerAddress" placeholder="Your delivery address" value="{{$user->customerAddress}}">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-primary float-right geocomplete-button" data-geocomplete-target="customerAddressTarget" data-geocomplete-field="customerAddress">Find</button>
                  </div>
                </div> -->

                <h6 class="mt-2">@lang('profile.ADDRESS')</h6>

                <div class="row mb-2" id="customerAddressTarget">
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.COUNTRY')</div>
                      </div>
                      <input name="customerAddressCountry" type="text" 
                      class="form-control" value="{{$user->customerAddressCountry}}" data-geo="country_short">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.ZIP')</div>
                      </div>
                      <input name="customerAddressZip" type="text" class="form-control" value="{{$user->customerAddressZip}}" data-geo="postal_code">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.CITY')</div>
                      </div>
                      <input name="customerAddressCity" type="text" class="form-control" value="{{$user->customerAddressCity}}" data-geo="locality">
                    </div>
                  </div>
                </div>  
                <div class="row mb-2" id="customerAddressTarget">
                  
                  <div class="col-md-9">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.STREET')</div>
                      </div>
                      <input name="customerAddressStreet" type="text" class="form-control" value="{{$user->customerAddressStreet}}" data-geo="route">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.NUMBER')</div>
                      </div>
                      <input name="customerAddressStreetNumber" type="text" class="form-control" value="{{$user->customerAddressStreetNumber}}" data-geo="street_number">
                    </div>
                  </div>
                  <input type="hidden" name="customerAddressLat" data-geo="lat">
                  <input type="hidden" name="customerAddressLon" data-geo="lng">
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.PHONE')</div>
                      </div>
                      <input name="customerPhone" type="text" class="form-control" id="" placeholder="Your phone number" value="{{$user->customerPhone}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@lang('profile.BILLING_ADDRESS')</div>
                      </div>
                      <input name="customerBillingAddress" type="text" class="form-control" id="" placeholder="Your billing address" value="{{$user->customerBillingAddress}}">
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div><!-- End of the Customer Section -->

        <hr>

        <div class="row mb-5">
          <div class="col-md-12">

            <a href="{{ url('/') }}">
              <button type="button" class="btn btn-sm btn-secondary">
                <i class="fa fa-chevron-left mr-1" aria-hidden="true"></i>
                 @lang('profile.BACK')
              </button>
            </a>

            <a href="#">
              <button type="submit" class="btn btn-sm btn-primary float-right">
                @lang('profile.SAVE') <i class="fa fa-floppy-o ml-1" aria-hidden="true"></i>
              </button>
            </a>

            <a class="" href="#" data-toggle="modal" data-target="#newProjectModal">
              <button type="submit" class="btn btn-sm btn-primary ">
                @lang('navigation.CREATE_NEW_PROJECT') <i class="fas fa-lightbulb"></i>
              </button>
            </a>
          </div>
        </div>

      </form>
      </div><!-- End of the container -->

      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <!-- Password Modal -->
            <div class="modal fade" id="add_pw" tabindex="-1" role="dialog" aria-labelledby="pw_modal" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="pw_modal">Set your custom password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                          <i class="fas fa-key"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Enter new password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                          <i class="far fa-key"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Re-type new password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <script type="text/javascript">

        // Maker Checkbox
        $('#maker_check').click(function(){
          //$(this).toggleClass("_pulse");
          $("#_maker").toggleClass("_hide");
        });

        // Manufacturer Checkbox
        $('#manufacturer_check').click(function(){
           //$(this).toggleClass("_pulse");
           $("#_manufacturer").toggleClass("_hide");
        });

        // Customer Checkbox
        $('#customer_check').click(function(){
          //$(this).toggleClass("_pulse");
          $("#_customer").toggleClass("_hide");
        });

		$('#pw_auth').click(function() {
			$('#pswInputs').toggle();
			if (this.value == 1) {
			   this.value = 0;
			} else {
				this.value = 1;
			}   
		});

        $('.geocomplete-button').each(function() {
          var geocomplete_target = $(this).attr('data-geocomplete-target');
          var geocomplete_field = $(this).attr('data-geocomplete-field');
          console.log(geocomplete_field);
          $('#' + geocomplete_field).geocomplete({
            details: "#" + geocomplete_target,
            detailsAttribute: "data-geo"
          });
          $(this).click(function() {
            $('#' + geocomplete_field).trigger("geocode");
          })
        });

		$('#profileForm').submit(function() {
				var result = true;
				var msg = '';
		        var requestValidator = function(selector, message) {
					if ($(selector).val() == '') {
						$(selector).addClass('alert-info');
						msg += "<li>"+message+"</li>";
						result = false;
					} else {
						$(selector).removeClass('alert-info');
					}
		        } 	
				
				// psw validations
				if ($('#pw_auth').val() == 0) {
					$('#inputPsw').val('');				
					$('#inputPsw2').val('');				
				} else {
					if ($('#inputPsw').val() != $('#inputPsw2').val()) {
						msg += "<li>@lang('profile.PSWS_NOTEQUAL')</li>";
						$('#inputPsw2').addClass('alert-info');
						result = false;					
					} else {
						$('#inputPsw2').removeClass('alert-info');
					}
					if (($('#inputPsw').val() != '') && ($('#inputPsw').val().length < 6)) {
						msg += "<li>@lang('profile.PSW_SHORT')</li>";
						$('#inputPsw').addClass('alert-info');
						result = false;					
					} else {
						$('#inputPsw').removeClass('alert-info');
					}
				}
					
				// maker validations
				if ($('#_maker').is(":visible")) {

				}  
					
				// manufacturer validations
				if ($('#_manufacturer').is(":visible")) {
					requestValidator('#manufacturerName',
	                  "@lang('profile.NAME_REQUEST')");
					requestValidator('#validationDefault1',
	                  "@lang('profile.ZIP_REQUEST')");
					requestValidator('#validationDefault2',
	                  "@lang('profile.CITY_REQUEST')");
					requestValidator('#validationDefault3',
	                  "@lang('profile.STREET_REQUEST')");
					requestValidator('#validationDefault4',
	                  "@lang('profile.NUMBER_REQUEST')");
	                  
					var wt = $('#manufacturerWorkTime').val();
					if ((wt == 0) || (wt == undefined)) {
						msg += "<li>@lang('profile.WORKTIME_REQUEST')</li>";
						$('#manufacturerWorkTime').addClass('alert-info');
						result = false;					
					} else {
						$('#manufacturerWorkTime').removeClass('alert-info');
					}
	                  
				}  

					
				if (!result) {
					$('#errorMsg').html("<ul>"+msg+"</ul>");
					$('#errorMsg').show();	
					window.scrollTo(0,100);				
				} else {
					$('#errorMsg').html('');
					$('#errorMsg').hide();					
				}

				return result;
				
		});
			
		$(function() {
				if ('{{$user->psw}}' != '') {
					$('#pw_auth').click();
				}
				var msg = "{{ $msg }}";
				var msgClass = "{{ $msgClass }}";
				if (msg != '') {
					$('#msg').html(msg);
					$('#msg').addClass(msgClass);
					$('#msg').show();
				}
		});
      </script>

@endsection
